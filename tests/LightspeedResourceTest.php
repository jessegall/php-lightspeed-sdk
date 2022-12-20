<?php

namespace JesseGall\LightspeedSDK\Tests;

use JesseGall\LightspeedSDK\Api\Api;
use JesseGall\LightspeedSDK\Exceptions\IdNullException;
use JesseGall\LightspeedSDK\Exceptions\Lightspeed\ResourceNotFoundException;
use JesseGall\LightspeedSDK\Tests\TestClasses\TestResource;
use JesseGall\Resources\ResourceCollection;

class LightspeedResourceTest extends TestCase
{

    protected function setUp(): void
    {
        parent::setUp();

        Api::mock();
    }

    public function test__when_all__Then_collection_of_resources_returned()
    {
        $resources = TestResource::all();

        $this->assertInstanceOf(ResourceCollection::class, $resources);
    }

    public function test__When_find_then_resource_found()
    {
        $resource = TestResource::find(20967267);

        $this->assertInstanceOf(TestResource::class, $resource);

        $this->assertEquals(20967267, $resource->getId());
    }

    public function test__When_resource_not_found__then_null()
    {
        Api::client()->getForwarder()->registerInterceptor(function () {
            throw new ResourceNotFoundException(TestResource::class, 1);
        });

        $this->assertNull(TestResource::find(1));
    }

    public function test__When_create_then_resource_created()
    {
        $resource = TestResource::create();

        $this->assertInstanceOf(TestResource::class, $resource);

        $this->assertEquals(20967267, $resource->getId());
    }

    public function test__Given_resource_without_id__When_hydrate__Then_exception_thrown()
    {
        $resource = new TestResource();

        $this->expectException(IdNullException::class);

        $resource->hydrate();
    }

    public function test__When_hydrate__Then_resource_hydrated()
    {
        $resource = new TestResource([
            'id' => 20967267
        ]);

        $resource->hydrate();

        $this->assertEquals('Test resource', $resource->getTitle());
    }

    public function test__Given_resource_without_id__When_sync__Then_exception_thrown()
    {
        $resource = new TestResource();

        $this->expectException(IdNullException::class);

        $resource->sync();
    }

    public function test__When_sync__Then_resource_synced()
    {
        $resource = new TestResource([
            'id' => 20967267,
        ]);

        $resource->sync();

        $this->assertEquals('Test resource', $resource->getTitle());
    }

    public function test__Given_resource_without_id__When_delete__Then_exception_thrown()
    {
        $resource = new TestResource();

        $this->expectException(IdNullException::class);

        $resource->delete();
    }

    public function test__When_delete__Then_resource_deleted()
    {
        $resource = new TestResource([
            'id' => 20967267
        ]);

        $this->assertEquals(true, $resource->delete());
    }

}