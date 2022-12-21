<?php

namespace JesseGall\LightspeedSDK\Tests;

use JesseGall\LightspeedSDK\LightspeedApi;
use JesseGall\LightspeedSDK\Tests\TestClasses\Interceptors\MockResponse;
use JesseGall\LightspeedSDK\Tests\TestClasses\TestResource;
use JesseGall\Proxy\Interactions\Contracts\InvokesMethod;

class ResourceTest extends TestCase
{

    private TestResource $resource;
    private int $apiCalls;

    protected function setUp(): void
    {
        parent::setUp();

        $this->resource = new TestResource([
            "id" => 123,
            "createdAt" => "2019-01-01T00:00:00+00:00",
            "updatedAt" => "2019-01-01T00:00:00+00:00",
            "title" => "Test resource",
            "description" => "This is a test resource",
            "singleRelation" => [
                "resource" => [
                    "id" => 321,
                    "url" => "test/321",
                ]
            ],
            "multipleRelation" => [
                "resource" => [
                    "id" => false,
                    "url" => "test"
                ]
            ]
        ]);

        $this->apiCalls = 0;

        LightspeedApi::registerInterceptor(new MockResponse(
            function (InvokesMethod $interaction) {
                $this->apiCalls++;

                $url = $interaction->getParameter(0);

                if ($url === $this->resource->get('singleRelation.resource.url')) {
                    return [
                        "id" => 321,
                        "createdAt" => "2020-01-01T00:00:00+00:00",
                        "updatedAt" => "2020-01-01T00:00:00+00:00",
                        "title" => "Test resource relation",
                        "description" => "This is a test resource",
                    ];
                }
            }
        ));
    }

    public function test__When_relation__Then_correct_relation()
    {
        $relation = $this->resource->relation('singleRelation.resource.embedded', TestResource::class);

        $this->assertInstanceOf(TestResource::class, $relation);

        $this->assertEquals(321, $relation->getId());
    }

    public function test__When_relation_loaded__Then_no_api_call()
    {
        $this->resource->setRelation('singleRelation', new TestResource());

        $this->resource->getRelation('singleRelation');

        $this->assertEquals(0, $this->apiCalls);
    }

    public function test__Given_lazy_load_relation_false__When_getting_relation__Then_null()
    {
        $this->resource->setLazyLoadRelations(false);

        $relation = $this->resource->relation('singleRelation.resource.embedded', TestResource::class);

        $this->assertNull($relation);
    }

}