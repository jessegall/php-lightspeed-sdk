<?php

namespace JesseGall\LightspeedSDK\Tests\TestClasses;

use JesseGall\LightspeedSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;

class TestResource extends Resource
{
    protected string $apiUrl = 'test';

    protected string $handle = 'test';

    /**
     * @return TestResource
     */
    public function getSingleRelation(): TestResource
    {
        return $this->relation('singleRelation.resource.embedded', TestResource::class);
    }

    /**
     * @return ResourceCollection<TestResource>
     */
    public function getMultipleRelation(): ResourceCollection
    {
        return $this->relation('multipleRelation.resource.embedded', TestResource::class, true);
    }

}