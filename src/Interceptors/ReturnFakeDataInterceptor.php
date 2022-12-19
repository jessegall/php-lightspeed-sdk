<?php

namespace JesseGall\LightspeedSDK\Interceptors;

use JesseGall\LightspeedSDK\Resources\Resource;
use JesseGall\Proxy\Forwarder\Contracts\Intercepts;
use JesseGall\Proxy\Interactions\Contracts\Interacts;
use JesseGall\Proxy\Interactions\Contracts\InvokesMethod;
use JesseGall\Proxy\Interactions\Status;

class ReturnFakeDataInterceptor implements Intercepts
{

    public function handle(Interacts $interaction, object $caller = null): void
    {
        if (! $this->isReadInteraction($interaction)) {
            return;
        }

        $url = $this->getUrl($interaction);

        $data = $this->getFakeData($caller);

        if (! str_contains($url, '/')) {
            $data = [$data];
        }

        $interaction->setResult($data);

        $interaction->setStatus(Status::FULFILLED);
    }

    protected function isReadInteraction(Interacts $interaction): bool
    {
        if (! ($interaction instanceof InvokesMethod)) {
            return false;
        }

        $method = $interaction->getMethod();

        if ($method !== 'read') {
            return false;
        }

        return true;
    }

    protected function getUrl(InvokesMethod $interaction): string
    {
        [$url] = explode('?', $interaction->getParameters()[0]);

        return $url;
    }

    protected function getFakeData(Resource $resource): array
    {
        $lightspeedResource = $resource->getLightspeedResource();

        $data = json_decode(file_get_contents(__DIR__ . "/../../resources/$lightspeedResource.json"), true);

        [$key] = array_keys($data);

        return $data[$key];
    }

}