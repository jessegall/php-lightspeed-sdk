<?php

namespace JesseGall\LightspeedSDK;

use Closure;
use JesseGall\LightspeedSDK\Api\Interceptors\MockCreate;
use JesseGall\LightspeedSDK\Api\Interceptors\MockDelete;
use JesseGall\LightspeedSDK\Api\Interceptors\MockRead;
use JesseGall\LightspeedSDK\Api\Interceptors\MockUpdate;
use JesseGall\LightspeedSDK\Handlers\ExceptionTransformer;
use JesseGall\LightspeedSDK\Handlers\RetryTooManyRequestsHandler;
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
            new ExceptionTransformer(),
            new RetryTooManyRequestsHandler()
        ]);
    }

    public function mock(Closure $interceptor = null): void
    {
        $this->getForwarder()->registerInterceptor([
            new MockRead(),
            new MockCreate(),
            new MockUpdate(),
            new MockDelete(),
            $interceptor ?: fn() => null
        ]);
    }

}