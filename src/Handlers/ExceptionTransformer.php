<?php

namespace JesseGall\LightspeedSDK\Handlers;

use JesseGall\Proxy\Forwarder\Strategies\Exceptions\ExecutionException;
use JesseGall\ProxyUtils\Handlers\ExceptionTransformer as BaseExceptionTransformer;
use JesseGall\Resources\Exceptions\ApiException;
use WebshopappApiException;

class ExceptionTransformer extends BaseExceptionTransformer
{

    public function __construct()
    {
        parent::__construct([
            WebshopappApiException::class => function (ExecutionException $exception) {
                $original = $exception->getException();

                return new ApiException($original->getMessage(), $original->getCode());
            }
        ]);
    }

}