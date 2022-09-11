<?php

namespace JesseGall\LightspeedSDK\Tests;

use InvalidArgumentException;
use JesseGall\LightspeedSDK\Resources\Resource;
use JesseGall\LightspeedSDK\Tests\TestClasses\TestResource;
use PHPUnit\Framework\TestCase;
use stdClass;

class ResourceTest extends TestCase
{

    private Resource $resource;

    protected function setUp(): void
    {
        parent::setUp();

        $this->resource = new class extends Resource {
            public function __construct()
            {
                parent::__construct([
                    'item_one' => 'one',
                    'item_two' => 'two',
                    'item_three' => 'three',
                    'single_relation' => [
                        'item_one' => 'one',
                        'item_two' => 'two',
                        'item_three' => 'three',
                    ],
                    'multiple_relations' => [
                        [
                            'item_one' => 'one',
                            'item_two' => 'two',
                            'item_three' => 'three',
                        ],
                        [
                            'item_one' => 'one',
                            'item_two' => 'two',
                            'item_three' => 'three',
                        ]
                    ],
                    'null_item' => null,
                ]);
            }

            public function getSingleRelation()
            {
                return $this->mapTo('single_relation', TestResource::class);
            }

            public function getMultipleRelations()
            {
                return $this->mapTo('multiple_relations', TestResource::class);
            }
        };
    }

    public function test_map_to_returns_expected_type()
    {
        $this->assertInstanceOf(
            TestResource::class,
            $this->resource->mapTo('single_relation', TestResource::class)
        );
    }

    public function test_map_to_returns_an_array_of_expected_types()
    {
        $items = $this->resource->mapTo('multiple_relations', TestResource::class);

        foreach ($items as $item) {
            $this->assertInstanceOf(TestResource::class, $item);
        }
    }

    public function test_null_is_returned_when_item_is_null()
    {
        $this->assertNull($this->resource->mapTo('null_item', TestResource::class));
    }

    public function test_null_is_returned_when_item_does_not_exist()
    {
        $this->assertNull($this->resource->mapTo('missing_relation', TestResource::class));
    }


}