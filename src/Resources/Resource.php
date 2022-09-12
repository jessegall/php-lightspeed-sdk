<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\LightspeedSDK\Api;
use JesseGall\LightspeedSDK\Exceptions\IdNullException;
use JesseGall\Resources\Resource as BaseResource;
use JesseGall\Resources\ResourceCollection;
use WebshopappApiException;

class Resource extends BaseResource
{

    /**
     * @var bool
     */
    protected bool $feed = true;

    /**
     * Fill the model with the data from lightspeed
     *
     * @return $this
     * @throws WebshopappApiException
     * @throws IdNullException
     */
    public function hydrate(): static
    {
        if (! ($id = $this->getId())) {
            throw new IdNullException();
        }

        $this->set(Api::client()->orders->get($id));

        return $this;
    }

    /**
     * Map the item(s) to the given resource type.
     * If the relation is not loaded, fetch the data from lightspeed.
     *
     * @param string $key
     * @param class-string<\JesseGall\LightspeedSDK\Resources\Resource> $type
     * @return BaseResource|ResourceCollection|null
     * @throws WebshopappApiException
     */
    public function relation(string $key, string $type, bool $multiple = false): BaseResource|ResourceCollection|null
    {
        $relation = BaseResource::relation($key, $type, $multiple);

        if (! $this->relationIsLoaded($key) && $this->feed) {
            $relation = $this->loadRelation($key, $type);
        }

        return $relation;
    }

    /**
     * Returns the relation url of the given key
     *
     * @param string $key
     * @return mixed
     */
    public function getRelationUrl(string $key): string
    {
        [$name] = explode('.', $key);

        return $this->get("$name.resource.url");
    }

    /**
     * Load the relation data from lightspeed
     *
     * @param string $key
     * @param class-string<\JesseGall\LightspeedSDK\Resources\Resource> $type
     * @return ResourceCollection|BaseResource
     * @throws WebshopappApiException
     */
    private function loadRelation(string $key, string $type): ResourceCollection|BaseResource
    {
        $url = $this->getRelationUrl($key);

        $data = Api::client()->read($url);

        $relation = $type::create($data);

        $this->setRelation($key, $relation);

        return $relation;
    }

    # --- Getters and setters

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->get('id');
    }

    /**
     * @param int $id
     * @return $this
     */
    public function setId(int $id): static
    {
        return $this->set('id', $id);
    }

    /**
     * @param bool $feed
     */
    public function setFeed(bool $feed): void
    {
        $this->feed = $feed;
    }

}