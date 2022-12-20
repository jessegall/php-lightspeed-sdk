<?php

namespace JesseGall\LightspeedSDK\Tests;

use JesseGall\LightspeedSDK\Exceptions\IdNullException;
use JesseGall\LightspeedSDK\Exceptions\Lightspeed\ResourceNotFoundException;
use JesseGall\LightspeedSDK\LightspeedApi;
use JesseGall\LightspeedSDK\Tests\TestClasses\Interceptors\MockResponse;
use JesseGall\LightspeedSDK\Tests\TestClasses\TestResource;
use JesseGall\Resources\ResourceCollection;

class LightspeedResourceTest extends TestCase
{

    public function test__When_count__Then_count_returned()
    {
        $count = 10;

        LightspeedApi::registerInterceptor(new MockResponse('read', fn() => $count));

        $this->assertEquals($count, TestResource::count());
    }

    public function test__when_all__Then_collection_of_resources()
    {
        $resources = [
            ['id' => 1],
            ['id' => 2],
            ['id' => 3],
        ];

        LightspeedApi::registerInterceptor(new MockResponse('read', fn() => $resources));

        $resources = TestResource::all();

        $this->assertInstanceOf(ResourceCollection::class, $resources);

        $this->assertCount(3, $resources);
    }

    public function test__When_find_then_resource_found()
    {
        $id = 123;

        LightspeedApi::registerInterceptor(new MockResponse('read', fn() => ['id' => $id]));

        $resource = TestResource::find($id);

        $this->assertInstanceOf(TestResource::class, $resource);

        $this->assertEquals($id, $resource->getId());
    }

    public function test__When_resource_not_found__then_null()
    {
        $id = 123;

        LightspeedApi::registerInterceptor(new MockResponse(
            'read', fn() => throw new ResourceNotFoundException(TestResource::class, $id)
        ));

        $this->assertNull(TestResource::find($id));
    }

    public function test__When_create_then_resource_created()
    {
        $data = [
            'id' => 123,
            'title' => 'test',
        ];

        LightspeedApi::registerInterceptor(new MockResponse('create', fn() => $data));

        $resource = TestResource::create();

        $this->assertInstanceOf(TestResource::class, $resource);

        $this->assertEquals(123, $resource->getId());

        $this->assertEquals('test', $resource->getTitle());
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

        LightspeedApi::registerInterceptor(new MockResponse('read', fn() => $data));

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
        $data = [
            'title' => 'test',
        ];

        LightspeedApi::registerInterceptor(new MockResponse('update', fn() => $data));

        $resource = new TestResource(['id' => 123]);

        $resource->sync();

        $this->assertEquals(123, $resource->getId());

        $this->assertEquals('test', $resource->getTitle());
    }

    public function test__Given_resource_without_id__When_delete__Then_exception_thrown()
    {
        $resource = new TestResource();

        $this->expectException(IdNullException::class);

        $resource->delete();
    }

    public function test__When_delete__Then_resource_deleted()
    {
        LightspeedApi::registerInterceptor(new MockResponse('delete', fn() => null));

        $resource = new TestResource(['id' => 123]);

        $this->assertEquals(true, $resource->delete());
    }

}