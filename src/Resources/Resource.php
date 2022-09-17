<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\ContainsData\ReferenceMissingException;
use JesseGall\LightspeedSDK\Api;
use JesseGall\LightspeedSDK\Exceptions\IdNullException;
use JesseGall\Resources\Resource as BaseResource;
use JesseGall\Resources\ResourceCollection;

class Resource extends BaseResource
{

    /**
     * @var string
     */
    protected string $endpoint;

    /**
     * @var string
     */
    protected string $handle;

    /**
     * @var bool
     */
    protected bool $feedMissingRelations = true;

    /**
     * Returns the api url of the resource
     *
     * @param int|string $id
     * @return string
     */
    private function url(int|string $id): string
    {
        return "$this->endpoint/$id";
    }

    /**
     * Fill the model with the data from lightspeed
     *
     * @return $this
     * @throws IdNullException
     */
    public function hydrate(): static
    {
        if (! ($id = $this->getId())) {
            throw new IdNullException();
        }

        $response = Api::read($this->url($id));

        $this->container($response);

        return $this;
    }

    /**
     * Sync the data of the resource with lightspeed
     *
     * @return $this
     * @throws IdNullException
     */
    public function sync(): static
    {
        if (! ($id = $this->getId())) {
            throw new IdNullException();
        }

        $response = Api::update($this->url($id), [
            $this->handle => $this->container()
        ]);

        $this->merge($response);

        return $this;
    }

    /**
     * Set data using in the resource using the dot notation.
     * Set relation when the value is a resource or resource collection.
     *
     * @param string $key
     * @param mixed|null $value
     * @return $this
     */
    public function set(string $key, mixed $value = null): static
    {
        if ($value instanceof Resource || $value instanceof ResourceCollection) {
            $this->setRelation($key, $value);

            $value = $value->toArray();
        }

        return parent::set($key, $value);
    }

    /**
     * Map the item(s) to the given resource type.
     * If the relation is not loaded, fetch the data from lightspeed.
     *
     * @param string $key
     * @param class-string<\JesseGall\LightspeedSDK\Resources\Resource> $type
     * @param bool $asCollection
     * @return BaseResource|ResourceCollection|null
     */
    public function relation(string $key, string $type, bool $asCollection = false): BaseResource|ResourceCollection|null
    {
        try {
            $relation = BaseResource::relation($key, $type, $asCollection);
        } catch (ReferenceMissingException) {
            $this->loadRelation($key);

            return $this->relation($key, $type, $asCollection);
        }

        return $relation;
    }

    /**
     * Load the relation data from lightspeed
     *
     * @param string $key
     * @return void
     */
    protected function loadRelation(string $key): void
    {
        $url = $this->getRelationUrl($key);

        $data = $this->feedMissingRelations ? Api::read($url) : [];

        $this->set($key, $data);
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
     * @return int|string
     */
    public function getId(): int|string
    {
        return $this->get('id');
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
     * @return string
     */
    public function getEndpoint(): string
    {
        return $this->endpoint;
    }

    /**
     * @param string $endpoint
     */
    public function setEndpoint(string $endpoint): void
    {
        $this->endpoint = $endpoint;
    }

    /**
     * @return string
     */
    public function getHandle(): string
    {
        return $this->handle;
    }

    /**
     * @param string $handle
     */
    public function setHandle(string $handle): void
    {
        $this->handle = $handle;
    }

    /**
     * @param bool $feedMissingRelations
     */
    public function setFeedMissingRelations(bool $feedMissingRelations): void
    {
        $this->feedMissingRelations = $feedMissingRelations;
    }

}