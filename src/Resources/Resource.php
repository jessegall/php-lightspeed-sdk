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
    protected bool $feedMissingRelations = true;

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

        $this->set(Api::orders()->get($id));

        return $this;
    }

    /**
     * @return int|string
     */
    public function getId(): int|string
    {
        return $this->get('id');
    }

    public function set(array|string $key, mixed $value = null): static
    {
        if ($value instanceof Resource || $value instanceof ResourceCollection) {
            $this->setRelation($key, $value);
        }

        return parent::set($key, $value);
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

        if (! $this->relationIsLoaded($key)) {
            $relation = $this->loadRelation($key, $type, $multiple);
        }

        return $relation;
    }

    /**
     * Load the relation data from lightspeed
     *
     * @param string $key
     * @param class-string<\JesseGall\LightspeedSDK\Resources\Resource> $type
     * @return ResourceCollection|BaseResource
     * @throws WebshopappApiException
     */
    private function loadRelation(string $key, string $type, bool $multiple): ResourceCollection|BaseResource
    {
        $url = $this->getRelationUrl($key);

        $data = $this->feedMissingRelations ? Api::read($url) : [];

        $relation = $multiple ? $type::collection($data) : $type::create($data);

        $this->setRelation($key, $relation);

        return $relation;
    }

    # --- Getters and setters ---

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
     * @param int|string $id
     * @return $this
     */
    public function setId(int|string $id): static
    {
        return $this->set('id', $id);
    }

    /**
     * @param bool $feedMissingRelations
     */
    public function setFeedMissingRelations(bool $feedMissingRelations): void
    {
        $this->feedMissingRelations = $feedMissingRelations;
    }

}