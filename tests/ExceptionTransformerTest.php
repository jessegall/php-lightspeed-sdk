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

    private ExceptionTransformer $transformer;
    private ExecutionException $exception;

    protected function setUp(): void
    {
        parent::setUp();

        $this->transformer = new ExceptionTransformer();

        $this->exception = new ExecutionException(new class extends Strategy {

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

        }, new WebshopappApiException('', 404));
    }

    public function test__Given_WebshopappApiException_with_code_404__When_handle__Then_exception_transformed_to_ResourceNotFoundException()
    {
        $this->transformer->handle($this->exception);

        $this->assertInstanceOf(ResourceNotFoundException::class, $this->exception->getException());
    }

    public function test__Given_WebshopappApiException_with_code_404__When_handle__Then_getId_on_transformed_exception_returns_id_of_caller()
    {
        $this->transformer->handle($this->exception);

        $this->assertEquals(99, $this->exception->getException()->getId());
    }

    public function test__Given_WebshopappApiException_with_code_404__When_handle__Then_getType_on_transformed_exception_returns_type_of_caller()
    {
        $this->transformer->handle($this->exception);

        $this->assertEquals(get_class($this->exception->getStrategy()->getCaller()), $this->exception->getException()->getType());
    }
}