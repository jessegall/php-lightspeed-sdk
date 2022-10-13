<?php

namespace JesseGall\LightspeedSDK\Resources;

use InvalidArgumentException;
use JesseGall\ContainsData\ReferenceMissingException;
use JesseGall\LightspeedSDK\Api;
use JesseGall\LightspeedSDK\Exceptions\IdNullException;
use JesseGall\LightspeedSDK\Exceptions\Lightspeed\ResourceNotFoundException;
use JesseGall\LightspeedSDK\Resources\Concerns\LightspeedResource;
use JesseGall\Resources\RemoteResource;
use JesseGall\Resources\Resource as BaseResource;
use JesseGall\Resources\ResourceCollection;

class Resource extends BaseResource implements RemoteResource
{
    use LightspeedResource;

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint;

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource;

    /**
     * Indicates whether missing relations should be lazy loaded.
     *
     * @var bool
     */
    protected bool $lazyLoadRelations = true;

    /**
     * Returns the api url of the resource.
     *
     * @param int|string $id
     * @return string
     */
    private function url(int|string $id): string
    {
        return "$this->endpoint/$id";
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
        if (! class_exists($type)) {
            throw new InvalidArgumentException("Type $type is not a valid class");
        }

        if (! is_subclass_of($type, self::class)) {
            throw new InvalidArgumentException("Type $type is not a subclass of Resource");
        }

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

        $data = $this->lazyLoadRelations ? Api::read($url) : null;

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
    public function getLightspeedResource(): string
    {
        return $this->lightspeedResource;
    }

    /**
     * @param string $lightspeedResource
     */
    public function setLightspeedResource(string $lightspeedResource): void
    {
        $this->lightspeedResource = $lightspeedResource;
    }

    /**
     * @param bool $lazyLoadRelations
     */
    public function setLazyLoadRelations(bool $lazyLoadRelations): void
    {
        $this->lazyLoadRelations = $lazyLoadRelations;
    }

}