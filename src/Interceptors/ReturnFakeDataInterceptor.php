<?php

namespace JesseGall\LightspeedSDK\Interceptors;

use JesseGall\LightspeedSDK\Resources\Resource;
use JesseGall\Proxy\Contracts\Intercepts;
use JesseGall\Proxy\Interactions\Contracts\Interacts;
use JesseGall\Proxy\Interactions\Contracts\InteractsWithMethod;
use JesseGall\Proxy\Interactions\Status;

class ReturnFakeDataInterceptor implements Intercepts
{

    public function intercept(Interacts $interaction, object $interactor = null): void
    {
        if (! $this->isReadInteraction($interaction, $interactor)) {
            return;
        }

        $url = $this->getUrl($interaction);

        $data = $this->getFakeData($interactor);

        if (! str_contains($url, '/')) {
            $data = [$data];
        }

        $interaction->setResult($data);

        $interaction->setStatus(Status::FULFILLED);
    }

    private function isReadInteraction(Interacts $interaction, object $interactor = null): bool
    {
        if (! ($interactor instanceof Resource)) {
            return false;
        }

        if (! ($interaction instanceof InteractsWithMethod)) {
            return false;
        }

        $method = $interaction->getMethod();

        if ($method !== 'read') {
            return false;
        }

        return true;
    }

    private function getUrl(InteractsWithMethod $interaction): string
    {
        [$url] = explode('?', $interaction->getParameters()[0]);

        return $url;
    }

    /**
     * @param Resource $resource
     * @return mixed
     */
    private function getFakeData(Resource $resource): array
    {
        $lightspeedResource = $resource->getLightspeedResource();

        $data = json_decode(file_get_contents(__DIR__ . "/../../generator/resources/$lightspeedResource.json"), true);

        [$key] = array_keys($data);

        return $data[$key];
    }
}