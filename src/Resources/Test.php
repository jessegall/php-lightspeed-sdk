<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\Resources\ResourceCollection;

/**
 * Test
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/test
 */
class Test extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/tests';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'test';


    /**
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->get('createdAt');
    }

    /**
     * @param string|null $createdAt
     * @return $this
     */
    public function setCreatedAt(string $createdAt = null): static
    {
        return $this->set('createdAt', $createdAt);
    }

    /**
     * @return string|null
     */
    public function getUpdatedAt(): ?string
    {
        return $this->get('updatedAt');
    }

    /**
     * @param string|null $updatedAt
     * @return $this
     */
    public function setUpdatedAt(string $updatedAt = null): static
    {
        return $this->set('updatedAt', $updatedAt);
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->get('title');
    }

    /**
     * @param string|null $title
     * @return $this
     */
    public function setTitle(string $title = null): static
    {
        return $this->set('title', $title);
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->get('description');
    }

    /**
     * @param string|null $description
     * @return $this
     */
    public function setDescription(string $description = null): static
    {
        return $this->set('description', $description);
    }

    /**
     * @return Test|null
     */
    public function getSingleRelation(): ?Test
    {
        return $this->relation('singleRelation.resource.embedded', Test::class);
    }


    /**
     * @return int|null
     */
    public function getSingleRelationId(): ?int
    {
        return $this->get('singleRelation.resource.id');
    }

    /**
     * @param Test|null $singleRelation
     * @return $this
     */
    public function setSingleRelation(Test $singleRelation = null): static
    {
        $this->set('singleRelation.resource.embedded', $singleRelation);

        return $this;
    }

    /**
     * @return ResourceCollection<Test>|null
     */
    public function getMultipleRelation(): ?ResourceCollection
    {
        return $this->relation('multipleRelation.resource.embedded', Test::class, true);
    }


    /**
     * @param ResourceCollection<Test>|null $multipleRelation
     * @return $this
     */
    public function setMultipleRelation(ResourceCollection $multipleRelation = null): static
    {
        $this->set('multipleRelation.resource.embedded', $multipleRelation);

        return $this;
    }

}
