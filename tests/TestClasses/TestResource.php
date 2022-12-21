<?php

namespace JesseGall\LightspeedSDK\Tests\TestClasses;

use JesseGall\LightspeedSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;

class TestResource extends Resource
{
    protected string $endpoint = 'test';

    protected string $lightspeedResource = 'test';

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->get('title');
    }

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle(string $title): static
    {
        $this->set('title', $title);

        return $this;
    }

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

    /**
     * Set exists value
     *
     * @param bool $exists
     * @return $this
     */
    public function setExists(bool $exists): static
    {
        $this->exists = $exists;

        return $this;
    }

}