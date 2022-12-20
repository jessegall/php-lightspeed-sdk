<?php

namespace JesseGall\LightspeedSDK\Api\Interceptors;

use JesseGall\LightspeedSDK\Api\Interceptors\Concerns\MocksData;
use JesseGall\LightspeedSDK\Resources\Resource;
use JesseGall\Proxy\Forwarder\Contracts\Intercepts;
use JesseGall\Proxy\Interactions\Contracts\Interacts;
use JesseGall\Proxy\Interactions\Contracts\InvokesMethod;
use JesseGall\Proxy\Interactions\Status;

class MockRead implements Intercepts
{
    use MocksData;

    public function handle(Interacts $interaction, object $caller = null): void
    {
        if (! $this->isRead($interaction)) {
            return;
        }

        $url = $this->getUrl($interaction);

        $data = $this->getMockData($caller instanceof Resource ? $caller : $interaction->getParameter(0));

        // Check if the read action is for a single resource or a collection
        if (! str_contains($url, '/')) {
            $data = [$data, $data, $data];
        }

        $interaction->setResult($data);

        $interaction->setStatus(Status::FULFILLED);
    }

    protected function isRead(Interacts $interaction): bool
    {
        return $interaction instanceof InvokesMethod && $interaction->getMethod() === 'read';
    }

    protected function getUrl(InvokesMethod $interaction): string
    {
        [$url] = explode('?', $interaction->getParameters()[0]);

        return $url;
    }

}