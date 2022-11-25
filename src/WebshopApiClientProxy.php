<?php

namespace JesseGall\LightspeedSDK;

use JesseGall\LightspeedSDK\Handlers\RetryTooManyRequestsExceptionHandler;
use JesseGall\LightspeedSDK\Handlers\TransformExceptionHandler;
use JesseGall\Proxy\DecorateMode;
use JesseGall\Proxy\Proxy;

/**
 * @mixin \WebshopappApiClient
 */
class WebshopApiClientProxy extends Proxy
{

    public function __construct(string $server, string $key, string $secret, string $language)
    {
        parent::__construct(new \WebshopappApiClient($server, $key, $secret, $language));

        $this->decorateMode = DecorateMode::ALWAYS;

        $this->getForwarder()->registerExceptionHandler([
            new TransformExceptionHandler(),
            new RetryTooManyRequestsExceptionHandler()
        ]);
    }

}