<?php

namespace JesseGall\LightspeedSDK;

use JesseGall\LightspeedSDK\Resources\Resource;
use JesseGall\Proxy\Contracts\Intercepts;
use JesseGall\Proxy\Interactions\CallInteraction;
use JesseGall\Proxy\Interactions\Interaction;
use JesseGall\Proxy\Interactions\Status;

class FakeDataInterceptor implements Intercepts
{

    public function intercept(Interaction $interaction): void
    {
        if (! $this->isReadInteraction($interaction)) {
            return;
        }

        $url = $this->getUrl($interaction);

        $resource = $this->getResource();

        $data = $this->getFakeData($resource);

        if (! str_contains($url, '/')) {
            $data = [$data];
        }

        $interaction->setResult($data);

        $interaction->setStatus(Status::FULFILLED);
    }

    private function isReadInteraction(Interaction $interaction)
    {
        if (! $interaction instanceof CallInteraction) {
            return false;
        }

        $method = $interaction->getMethod();

        if ($method !== 'read') {
            return false;
        }

        return true;
    }

    private function getUrl(CallInteraction $interaction): string
    {
        [$url] = explode('?', $interaction->getParameters()[0]);

        return $url;
    }

    /**
     * @param Resource $resource
     * @return mixed
     */
    private function getFakeData(Resource $resource)
    {
        $handle = $resource->getHandle();

        $data = json_decode(file_get_contents(__DIR__ . "/../generator/resources/$handle.json"), true);

        [$key] = array_keys($data);

        return $data[$key];
    }

    /**
     * Returns the resource that requested the interaction
     *
     * @return mixed
     */
    private function getResource()
    {
        return debug_backtrace()[7]['object'];
    }

}