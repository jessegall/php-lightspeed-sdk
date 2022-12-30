<?php

namespace JesseGall\LightspeedSDK\Tests;

use JesseGall\LightspeedSDK\LightspeedApi;
use JesseGall\LightspeedSDK\Tests\TestClasses\Interceptors\MockResponse;
use JesseGall\LightspeedSDK\Tests\TestClasses\TestResource;
use JesseGall\Proxy\Interactions\Contracts\InvokesMethod;
use JesseGall\Resources\Exceptions\ApiException;
use JesseGall\Resources\ResourceCollection;

class LightspeedResourceTest extends TestCase
{

    public function test__When_count__Then_count_returned()
    {
        $count = 10;
        $method = null;
        $url = null;

        LightspeedApi::registerInterceptor(new MockResponse(
            function (InvokesMethod $interaction) use ($count, &$method, &$url) {
                $method = $interaction->getMethod();
                $url = $interaction->getParameter(0);
                return $count;
            }
        ));

        $this->assertEquals($count, TestResource::count());
        $this->assertEquals('read', $method);
        $this->assertEquals('test/count', $url);
    }

    public function test__When_all__Then_collection_of_resources()
    {
        $method = null;
        $url = null;

        LightspeedApi::registerInterceptor(new MockResponse(
            function (InvokesMethod $interaction) use (&$method, &$url) {
                $method = $interaction->getMethod();
                $url = $interaction->getParameter(0);
                return [
                    ['id' => 1],
                    ['id' => 2],
                    ['id' => 3],
                ];
            }
        ));

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

        LightspeedApi::registerInterceptor(new MockResponse(
            function (InvokesMethod $interaction) use ($id, &$method, &$url) {
                $method = $interaction->getMethod();
                $url = $interaction->getParameter(0);
                return ['id' => $id];
            }
        ));

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
            fn() => throw new ApiException('', 404)
        ));

        $this->assertNull(TestResource::find($id));
    }

    public function test__When_create_then_resource_created()
    {
        $method = null;
        $url = null;

        LightspeedApi::registerInterceptor(new MockResponse(
            function (InvokesMethod $interaction) use (&$method, &$url) {
                $method = $interaction->getMethod();
                $url = $interaction->getParameter(0);
                return [
                    'id' => 123,
                    'title' => 'test',
                ];
            }
        ));

        $resource = TestResource::create();

        $this->assertInstanceOf(TestResource::class, $resource);

        $this->assertEquals(123, $resource->getId());
        $this->assertEquals('test', $resource->getTitle());
        $this->assertEquals('create', $method);
        $this->assertEquals('test', $url);
    }

    public function test__When_hydrate__Then_resource_hydrated()
    {
        $method = null;
        $url = null;

        LightspeedApi::registerInterceptor(new MockResponse(
            function (InvokesMethod $interaction) use (&$method, &$url) {
                $method = $interaction->getMethod();
                $url = $interaction->getParameter(0);
                return [
                    'id' => 123,
                    'title' => 'test',
                ];
            }
        ));

        $resource = new TestResource(['id' => 123]);

        $resource->hydrate();

        $this->assertEquals('test', $resource->getTitle());
        $this->assertEquals('read', $method);
        $this->assertEquals('test/123', $url);
    }

    public function test__When_hydrate__Then_local_data_is_preserved()
    {
        LightspeedApi::registerInterceptor(new MockResponse(
            function () {
                return [
                    'id' => 123,
                    'title' => 'test',
                ];
            }
        ));

        $resource = new TestResource([
            'id' => 123,
            'title' => 'local'
        ]);

        $resource->hydrate();

        $this->assertEquals('local', $resource->getTitle());
    }

    public function test__When_hydrate__Then_exists_true()
    {
        LightspeedApi::registerInterceptor(new MockResponse(fn() => []));

        $resource = new TestResource(['id' => 123]);

        $resource->hydrate();

        $this->assertTrue($resource->exists());
    }

    public function test__When_save__Then_resource_saved()
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

        $resource->setExists(true);

        $resource->save();

        $this->assertEquals(123, $resource->getId());
        $this->assertEquals('test', $resource->getTitle());
        $this->assertEquals('update', $method);
        $this->assertEquals('test/123', $url);
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

        $resource->setExists(true);

        $this->assertEquals(true, $resource->delete());
        $this->assertEquals('delete', $method);
    }

    public function test__Given_exists_true__When_delete__Then_exists_false()
    {
        LightspeedApi::registerInterceptor(new MockResponse(fn() => null));

        $resource = new TestResource(['id' => 123]);

        $resource->setExists(true);

        $resource->delete();

        $this->assertFalse($resource->exists());
    }

    public function test__When_refresh__Then_resource_refreshed()
    {
        $method = null;
        $url = null;

        LightspeedApi::registerInterceptor(new MockResponse(
            function (InvokesMethod $interaction) use (&$method, &$url) {
                $method = $interaction->getMethod();
                $url = $interaction->getParameter(0);
                return [
                    'id' => 123,
                    'title' => 'test',
                ];
            }
        ));

        $resource = new TestResource(['id' => 123]);

        $resource->setExists(true);

        $resource->refresh();

        $this->assertEquals('test', $resource->getTitle());
        $this->assertEquals('read', $method);
        $this->assertEquals('test/123', $url);
    }

    public function test__When_refresh__Then_local_data_is_overwritten()
    {
        LightspeedApi::registerInterceptor(new MockResponse(
            function () {
                return [
                    'id' => 123,
                    'title' => 'expected',
                ];
            }
        ));

        $resource = new TestResource([
            'id' => 123,
            'title' => 'should_be_overwritten',
            'someRandomProperty' => 'should_be_null'
        ]);

        $resource->setExists(true);

        $resource->refresh();

        $this->assertEquals('expected', $resource->getTitle());
        $this->assertNull($resource->get('someRandomProperty'));
    }

}