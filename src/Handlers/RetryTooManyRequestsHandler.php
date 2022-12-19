<?php

namespace JesseGall\LightspeedSDK\Handlers;

use Exception;
use JesseGall\ProxyUtils\Handlers\RetryHandler;
use WebshopappApiException;

class RetryTooManyRequestsHandler extends RetryHandler
{

    const MAX_ATTEMPTS = 10;

    public function __construct(int $sleepSeconds = 60)
    {
        parent::__construct(self::MAX_ATTEMPTS, function (Exception $exception) use ($sleepSeconds) {
            if (! $this->isTooManyRequestsException($exception)) {
                return false;
            }

            sleep($sleepSeconds);
        });
    }

    public function isTooManyRequestsException(Exception $exception): bool
    {
        return $exception instanceof WebshopappApiException && $exception->getCode() === 429;
    }

}