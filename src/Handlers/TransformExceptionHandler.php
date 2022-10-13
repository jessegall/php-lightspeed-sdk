<?php

namespace JesseGall\LightspeedSDK\Handlers;

use JesseGall\LightspeedSDK\Exceptions\Lightspeed\ResourceNotFoundException;
use JesseGall\LightspeedSDK\Resources\Resource;
use JesseGall\Proxy\Contracts\HandlesFailedStrategies;
use JesseGall\Proxy\Strategies\Exceptions\ExecutionException;
use WebshopappApiException;

class TransformExceptionHandler implements HandlesFailedStrategies
{

    public function handle(ExecutionException $exception)
    {
        $original = $exception->getException();

        if (! ($original instanceof WebshopappApiException)) {
            return;
        }

        $caller = $exception->getStrategy()->getCaller();

        if ($original->getCode() === 404 && $caller instanceof Resource) {
            $exception->setException(new ResourceNotFoundException(get_class($caller), $caller->getId()));
        }
    }

}