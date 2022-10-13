<?php

namespace JesseGall\LightspeedSDK\Tests;

use JesseGall\LightspeedSDK\Api;
use JesseGall\LightspeedSDK\Tests\TestClasses\TestResource;
use JesseGall\LightspeedSDK\Tests\TestClasses\ThrowResourceNotFoundExceptionStrategy;
use JesseGall\Proxy\Interactions\CallInteraction;

class ResourceTest extends TestCase
{

    public function test_can_find_resource_with_id()
    {
        Api::fake();

        $this->assertInstanceOf(
            TestResource::class,
            TestResource::find(12345678)
        );
    }

    public function test_null_is_returned_when_resource_can_not_be_found()
    {
        Api::client()->getForwarder()->setStrategy(
            CallInteraction::class,
            ThrowResourceNotFoundExceptionStrategy::class
        );

        $this->assertNull(TestResource::find(12345678));
    }

    public function test_when_relation_is_retrieved_the_data_is_also_set_in_the_parent()
    {
        Api::fake();

        $resource = (new TestResource())->setId(12345678);

        $resource->hydrate();

        $relation = $resource->getSingleRelation();

        $this->assertEquals(
            $relation->container(),
            $resource->get('singleRelation.resource.embedded')
        );
    }

    public function test_when_relation_data_is_changed_the_parent_data_is_also_affected()
    {
        Api::fake();

        $resource = (new TestResource())->setId(12345678);

        $resource->hydrate();

        $relation = $resource->getSingleRelation();

        $relation->set('property', $expected = 'new value');

        $this->assertEquals($expected, $resource->get('singleRelation.resource.embedded.property'));
    }

}