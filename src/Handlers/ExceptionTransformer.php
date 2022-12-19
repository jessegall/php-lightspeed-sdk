<?php

namespace JesseGall\LightspeedSDK\Handlers;

use JesseGall\LightspeedSDK\Exceptions\Lightspeed\ResourceNotFoundException;
use JesseGall\LightspeedSDK\Resources\Resource;
use JesseGall\Proxy\Forwarder\Strategies\Exceptions\ExecutionException;
use JesseGall\ProxyUtils\Handlers\ExceptionTransformer as BaseExceptionTransformer;
use WebshopappApiException;

class ExceptionTransformer extends BaseExceptionTransformer
{

    public function __construct()
    {
        parent::__construct([
            WebshopappApiException::class => function (ExecutionException $exception) {
                $original = $exception->getException();

                $caller = $exception->getStrategy()->getCaller();

                if ($original->getCode() === 404 && $caller instanceof Resource) {
                    return new ResourceNotFoundException(get_class($caller), $caller->getId());
                }

                return $original;
            }
        ]);
    }

}