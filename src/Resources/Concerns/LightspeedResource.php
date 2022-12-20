<?php

namespace JesseGall\LightspeedSDK\Resources\Concerns;

use JesseGall\LightspeedSDK\Api\LightspeedApi;
use JesseGall\LightspeedSDK\Exceptions\IdNullException;
use JesseGall\LightspeedSDK\Exceptions\Lightspeed\ResourceNotFoundException;
use JesseGall\Resources\ResourceCollection;

/**
 * @template T of \JesseGall\Resources\Resource
 */
trait LightspeedResource
{

    /**
     * @param array $params
     * @return int
     */
    public static function count(array $params = []): int
    {
        return LightspeedApi::count((new static)->getEndpoint());
    }

    /**
     * Return a collection of all remote resources
     *
     * @param array $params
     * @return \JesseGall\Resources\ResourceCollection<T>
     */
    public static function all(array $params = []): ResourceCollection
    {
        $response = LightspeedApi::read((new static)->getEndpoint(), $params);

        if (! array_is_list($response)) {
            $response = [$response];
        }

        return static::collection($response);
    }

    /**
     * Find a remote resource by key
     *
     * @param int|string $key
     * @return static|null
     */
    public static function find(int|string $key): ?static
    {
        try {
            $resource = new static;

            $resource->setId($key);

            $resource->hydrate();

            return $resource;
        } catch (ResourceNotFoundException) {
            return null;
        }
    }

    /**
     * Create a remote resource
     *
     * @param array $data
     * @return static
     */
    public static function create(array $data = []): static
    {
        $resource = new static();

        $response = LightspeedApi::create($resource->getEndpoint(), [
            $resource->getLightspeedResource() => $data
        ]);

        $resource->merge($response);

        return $resource;
    }

    /**
     * Fill the resource with remote data.
     * Return true when successfully hydrated.
     *
     * @return bool
     */
    public function hydrate(): bool
    {
        if (! ($id = $this->getId())) {
            throw new IdNullException();
        }

        $data = LightspeedApi::read($this->url($id));

        $this->container($data);

        return true;
    }

    /**
     * Sync the local resource with the remote resource.
     * Return true when successfully synced.
     *
     * @return bool
     */
    public function sync(): bool
    {
        if (! ($id = $this->getId())) {
            throw new IdNullException();
        }

        $response = LightspeedApi::update($this->url($id), [
            $this->lightspeedResource => $this->container()
        ]);

        $this->merge($response);

        return true;
    }

    /**
     * Delete the remote resource.
     * Return true when successfully deleted.
     *
     * @return bool
     */
    public function delete(): bool
    {
        if (! ($id = $this->getId())) {
            throw new IdNullException();
        }

        $response = LightspeedApi::delete($this->url($id));

        return is_null($response);
    }
}