<?php

namespace JesseGall\LightspeedSDK;

use JesseGall\LightspeedSDK\Handlers\ExceptionTransformer;
use JesseGall\LightspeedSDK\Handlers\RetryTooManyRequestsHandler;
use JesseGall\LightspeedSDK\Tests\TestClasses\Interceptors\MockCreate;
use JesseGall\LightspeedSDK\Tests\TestClasses\Interceptors\MockDelete;
use JesseGall\LightspeedSDK\Tests\TestClasses\Interceptors\MockRead;
use JesseGall\LightspeedSDK\Tests\TestClasses\Interceptors\MockUpdate;
use JesseGall\Proxy\DecorateMode;
use JesseGall\Proxy\Proxy;

/**
 * @mixin \WebshopappApiClient
 */
class WebshopappApiClientProxy extends Proxy
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

    public function count(string $resource, array $params = []): int
    {
        return $this->read($resource . '/count', $params);
    }

}