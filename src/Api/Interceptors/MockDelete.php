<?php

namespace JesseGall\LightspeedSDK\Api\Interceptors;

use JesseGall\Proxy\Forwarder\Contracts\Intercepts;
use JesseGall\Proxy\Interactions\Contracts\Interacts;
use JesseGall\Proxy\Interactions\Contracts\InvokesMethod;
use JesseGall\Proxy\Interactions\Status;

class MockDelete implements Intercepts
{

    public function handle(Interacts $interaction, object $caller = null): void
    {
        if (! $this->isDelete($interaction)) {
            return;
        }

        $interaction->setStatus(Status::FULFILLED);

        $interaction->setResult(null);
    }

    protected function isDelete(Interacts $interaction): bool
    {
        return $interaction instanceof InvokesMethod && $interaction->getMethod() === 'delete';
    }
}