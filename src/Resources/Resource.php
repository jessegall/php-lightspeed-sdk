<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\ContainsData\ReferenceMissingException;
use JesseGall\LightspeedSDK\Api;
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
     * Get the relation with the given name.
     *
     * If the relation is not loaded, it will be lazy loaded.
     *
     * @param string $key
     * @param string $type
     * @param bool $asCollection
     * @return BaseResource|ResourceCollection|null
     */
    public function relation(string $key, string $type, bool $asCollection = false): BaseResource|ResourceCollection|null
    {
        try {
            return BaseResource::relation($key, $type, $asCollection);
        } catch (ReferenceMissingException) {
            if ($this->lazyLoadRelations) {
                $this->loadRelation($key);
            } else {
                return null;
            }

            return $this->relation($key, $type, $asCollection);
        }
    }


    /**
     * Load the relation data from lightspeed
     *
     * @param string $key
     * @return void
     */
    public function loadRelation(string $key): void
    {
        $url = $this->getRelationUrl($key);

        $data = Api::read($url);

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