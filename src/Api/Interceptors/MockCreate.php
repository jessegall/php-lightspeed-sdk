<?php

namespace JesseGall\LightspeedSDK\Api\Interceptors;

use JesseGall\LightspeedSDK\Api\Interceptors\Concerns\MocksData;
use JesseGall\Proxy\Forwarder\Contracts\Intercepts;
use JesseGall\Proxy\Interactions\Contracts\Interacts;
use JesseGall\Proxy\Interactions\Contracts\InvokesMethod;
use JesseGall\Proxy\Interactions\Status;

class MockCreate implements Intercepts
{
    use MocksData;

    public function handle(Interacts $interaction, object $caller = null): void
    {
        if (! $this->isCreate($interaction)) {
            return;
        }

        $interaction->setResult($this->getMockData($interaction->getParameter(0)));

        $interaction->setStatus(Status::FULFILLED);
    }

    private function isCreate(Interacts $interaction)
    {
        return $interaction instanceof InvokesMethod && $interaction->getMethod() === 'create';
    }
}