<?php

namespace JesseGall\LightspeedSDK\Api\Interceptors;

use JesseGall\LightspeedSDK\Api\Interceptors\Concerns\MocksData;
use JesseGall\Proxy\Forwarder\Contracts\Intercepts;
use JesseGall\Proxy\Interactions\Contracts\Interacts;
use JesseGall\Proxy\Interactions\Contracts\InvokesMethod;
use JesseGall\Proxy\Interactions\Status;

class MockUpdate implements Intercepts
{
    use MocksData;

    public function handle(Interacts $interaction, object $caller = null): void
    {
        if (! $this->isUpdate($interaction)) {
            return;
        }

        $data = $this->getMockData($caller);

        $interaction->setResult($data);

        $interaction->setStatus(Status::FULFILLED);
    }

    private function isUpdate(Interacts $interaction)
    {
        return $interaction instanceof InvokesMethod && $interaction->getMethod() === 'update';
    }
}