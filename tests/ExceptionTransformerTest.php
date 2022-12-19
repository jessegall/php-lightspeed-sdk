<?php

namespace JesseGall\LightspeedSDK\Tests;

use JesseGall\LightspeedSDK\Exceptions\Lightspeed\ResourceNotFoundException;
use JesseGall\LightspeedSDK\Handlers\ExceptionTransformer;
use JesseGall\LightspeedSDK\Resources\Resource;
use JesseGall\Proxy\Forwarder\Strategies\Exceptions\ExecutionException;
use JesseGall\Proxy\Forwarder\Strategies\Strategy;
use WebshopappApiException;

class ExceptionTransformerTest extends TestCase
{

    private function createTransformerAndException(int $code): array
    {
        $transformer = new ExceptionTransformer();

        $exception = new ExecutionException(new class extends Strategy {

            public function __construct()
            {
                $this->caller = new class extends Resource {
                    public function getId(): int|string
                    {
                        return 99;
                    }
                };
            }

            protected function doExecute()
            {
                //
            }

        }, new WebshopappApiException('', $code));

        return [$transformer, $exception];
    }

    public function test__Given_WebshopappApiException_with_code_404__When_handle__Then_exception_transformed_to_ResourceNotFoundException()
    {
        [$transformer, $exception] = $this->createTransformerAndException(404);

        $transformer->handle($exception);

        $this->assertInstanceOf(ResourceNotFoundException::class, $exception->getException());
    }

    public function test__Given_WebshopappApiException_with_code_404__When_handle__Then_getId_on_transformed_exception_returns_id_of_caller()
    {
        [$transformer, $exception] = $this->createTransformerAndException(404);

        $transformer->handle($exception);

        $this->assertEquals(99, $exception->getException()->getId());
    }

    public function test__Given_WebshopappApiException_with_code_404__When_handle__Then_getType_on_transformed_exception_returns_type_of_caller()
    {
        [$transformer, $exception] = $this->createTransformerAndException(404);

        $transformer->handle($exception);

        $this->assertEquals(get_class($exception->getStrategy()->getCaller()), $exception->getException()->getType());
    }

    public function test__Given_WebshopappApiException_with_code_not_404__When_handle__Then_exception_not_transformed()
    {
        [$transformer, $exception] = $this->createTransformerAndException(500);

        $transformer->handle($exception);

        $this->assertInstanceOf(WebshopappApiException::class, $exception->getException());
    }

}