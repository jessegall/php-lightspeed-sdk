<?php

namespace JesseGall\LightspeedSDK\Tests;

use JesseGall\LightspeedSDK\Exceptions\IdNullException;
use JesseGall\LightspeedSDK\Exceptions\Lightspeed\ResourceNotFoundException;
use JesseGall\LightspeedSDK\LightspeedApi;
use JesseGall\LightspeedSDK\Tests\TestClasses\Interceptors\MockResponse;
use JesseGall\LightspeedSDK\Tests\TestClasses\TestResource;
use JesseGall\Proxy\Interactions\Contracts\InvokesMethod;
use JesseGall\Resources\ResourceCollection;

class LightspeedResourceTest extends TestCase
{

    public function test__When_count__Then_count_returned()
    {
        $count = 10;
        $method = null;
        $url = null;

        LightspeedApi::registerInterceptor(
            new MockResponse(function (InvokesMethod $interaction) use ($count, &$method, &$url) {
                $method = $interaction->getMethod();
                $url = $interaction->getParameter(0);
                return $count;
            })
        );

        $this->assertEquals($count, TestResource::count());
        $this->assertEquals('read', $method);
        $this->assertEquals('test/count', $url);
    }

    public function test__when_all__Then_collection_of_resources()
    {
        $resources = [
            ['id' => 1],
            ['id' => 2],
            ['id' => 3],
        ];
        $method = null;
        $url = null;

        LightspeedApi::registerInterceptor(
            new MockResponse(function (InvokesMethod $interaction) use ($resources, &$method, &$url) {
                $method = $interaction->getMethod();
                $url = $interaction->getParameter(0);
                return $resources;
            })
        );

        $resources = TestResource::all();

        $this->assertInstanceOf(ResourceCollection::class, $resources);
        $this->assertCount(3, $resources);
        $this->assertEquals('read', $method);
        $this->assertEquals('test', $url);
    }

    public function test__When_find_then_resource_found()
    {
        $id = 123;
        $method = null;
        $url = null;

        LightspeedApi::registerInterceptor(
            new MockResponse(function (InvokesMethod $interaction) use ($id, &$method, &$url) {
                $method = $interaction->getMethod();
                $url = $interaction->getParameter(0);
                return ['id' => $id];
            })
        );

        $resource = TestResource::find($id);

        $this->assertInstanceOf(TestResource::class, $resource);
        $this->assertEquals($id, $resource->getId());
        $this->assertEquals('read', $method);
        $this->assertEquals('test/' . $id, $url);
    }

    public function test__When_resource_not_found__then_null()
    {
        $id = 123;

        LightspeedApi::registerInterceptor(new MockResponse(
            fn() => throw new ResourceNotFoundException(TestResource::class, $id)
        ));

        $this->assertNull(TestResource::find($id));
    }

    public function test__When_create_then_resource_created()
    {
        $method = null;
        $url = null;

        LightspeedApi::registerInterceptor(
            new MockResponse(function (InvokesMethod $interaction) use (&$method, &$url) {
                $method = $interaction->getMethod();
                $url = $interaction->getParameter(0);
                return [
                    'id' => 123,
                    'title' => 'test',
                ];
            })
        );

        $resource = TestResource::create();

        $this->assertInstanceOf(TestResource::class, $resource);

        $this->assertEquals(123, $resource->getId());
        $this->assertEquals('test', $resource->getTitle());
        $this->assertEquals('create', $method);
        $this->assertEquals('test', $url);
    }

    public function test__Given_resource_without_id__When_hydrate__Then_exception_thrown()
    {
        $resource = new TestResource();

        $this->expectException(IdNullException::class);

        $resource->hydrate();
    }

    public function test__When_hydrate__Then_resource_hydrated()
    {
        $data = [
            'title' => 'test',
        ];

        LightspeedApi::registerInterceptor(new MockResponse(fn() => $data));

        $resource = new TestResource(['id' => 123]);

        $resource->hydrate();

        $this->assertEquals('test', $resource->getTitle());
    }

    public function test__Given_resource_without_id__When_sync__Then_exception_thrown()
    {
        $resource = new TestResource();

        $this->expectException(IdNullException::class);

        $resource->sync();
    }

    public function test__When_sync__Then_resource_synced()
    {
        $method = null;
        $url = null;

        LightspeedApi::registerInterceptor(new MockResponse(
            function (InvokesMethod $interaction) use (&$method, &$url) {
                $method = $interaction->getMethod();
                $url = $interaction->getParameter(0);
                return [
                    'title' => 'test',
                ];
            }
        ));

        $resource = new TestResource(['id' => 123]);

        $resource->sync();

        $this->assertEquals(123, $resource->getId());
        $this->assertEquals('test', $resource->getTitle());
        $this->assertEquals('update', $method);
        $this->assertEquals('test/123', $url);
    }

    public function test__Given_resource_without_id__When_delete__Then_exception_thrown()
    {
        $resource = new TestResource();

        $this->expectException(IdNullException::class);

        $resource->delete();
    }

    public function test__When_delete__Then_resource_deleted()
    {
        $method = null;

        LightspeedApi::registerInterceptor(new MockResponse(
            function (InvokesMethod $interaction) use (&$method) {
                $method = $interaction->getMethod();
                return null;
            }
        ));

        $resource = new TestResource(['id' => 123]);
        
        $this->assertEquals(true, $resource->delete());
        $this->assertEquals('delete', $method);
    }

}