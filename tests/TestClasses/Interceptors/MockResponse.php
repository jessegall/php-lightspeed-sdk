<?php

namespace JesseGall\LightspeedSDK\Tests\TestClasses\Interceptors;

use Closure;
use JesseGall\LightspeedSDK\Resources\Resource;
use JesseGall\Proxy\Forwarder\Contracts\Intercepts;
use JesseGall\Proxy\Interactions\Contracts\Interacts;
use JesseGall\Proxy\Interactions\Contracts\InvokesMethod;
use JesseGall\Proxy\Interactions\Status;

class MockResponse implements Intercepts
{

    private Closure $value;

    public function __construct(Closure $value)
    {
        $this->value = $value;
    }

    public function handle(Interacts $interaction, object $caller = null): void
    {
        if (! ($interaction instanceof InvokesMethod)) {
            return;
        }

        $interaction->setResult(($this->value)($interaction, $caller));

        $interaction->setStatus(Status::FULFILLED);
    }

    protected function getMockData(Resource|string $resource): array
    {
        $jsonFile = $resource instanceof Resource
            ? $resource->getLightspeedResource()
            : $resource;

        $data = json_decode(file_get_contents(__DIR__ . "/../../resources/$jsonFile.json"), true);

        [$key] = array_keys($data);

        $data = $data[$key];

        if ($resource instanceof Resource && $resource->has('id')) {
            $data['id'] = $resource->getId();
        }

        return $data;
    }

}