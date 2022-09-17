<?php

namespace JesseGall\LightspeedSDK\Tests;

use JesseGall\LightspeedSDK\Api;
use JesseGall\LightspeedSDK\Tests\TestClasses\TestResource;

class ResourceTest extends TestCase
{

    public function test_when_relation_is_retrieved_the_data_is_also_set_in_the_parent()
    {
        Api::fake();

        $resource = (new TestResource())->setId(12345678)->hydrate();

        $relation = $resource->getSingleRelation();

        $this->assertEquals(
            $relation->container(),
            $resource->get('singleRelation.resource.embedded')
        );
    }

}