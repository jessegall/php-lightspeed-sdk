<?php

namespace JesseGall\LightspeedSDK\Handlers;

use Exception;
use JesseGall\Proxy\Contracts\HandlesFailedStrategies;
use JesseGall\Proxy\Strategies\Exceptions\ExecutionException;
use WebshopappApiException;

class RetryTooManyRequestsExceptionHandler implements HandlesFailedStrategies
{

    public function handle(ExecutionException $exception)
    {
        if (! $this->isTooManyRequestsException($exception->getException())) {
            return;
        }

        while (true) {
            sleep(60);

            try {
                $exception->getStrategy()->execute();

                $exception->setShouldThrow(false);

                break;
            } catch (ExecutionException $e) {
                if (! $this->isTooManyRequestsException($e->getException())) {
                    break;
                }
            }
        }
    }

    public function isTooManyRequestsException(Exception $exception): bool
    {
        return $exception instanceof WebshopappApiException && $exception->getCode() === 429;
    }

}