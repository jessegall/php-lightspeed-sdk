<?php

namespace JesseGall\LightspeedSDK\Handlers;

use Exception;
use JesseGall\Proxy\Forwarder\Contracts\HandlesFailedStrategies;
use JesseGall\Proxy\Forwarder\Strategies\Exceptions\ExecutionException;
use WebshopappApiException;

class RetryTooManyRequestsExceptionHandler implements HandlesFailedStrategies
{

    private int $sleepSeconds;
    private int $maxTries;
    private int $tries = 0;

    public function __construct(int $sleepSeconds = 60, int $maxTries = 10)
    {
        $this->sleepSeconds = $sleepSeconds;
        $this->maxTries = $maxTries;
    }

    public function handle(ExecutionException $exception): void
    {
        if (! $this->isTooManyRequestsException($exception->getException())) {
            return;
        }

        while (true) {
            sleep($this->sleepSeconds);

            try {
                $exception->getStrategy()->execute();

                $exception->setShouldThrow(false);

                break;
            } catch (ExecutionException $e) {
                if (! $this->isTooManyRequestsException($e->getException())) {
                    break;
                }

                if ($this->tries++ >= $this->maxTries) {
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