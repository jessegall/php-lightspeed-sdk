<?php

namespace JesseGall\LightspeedSDK\Resources\Concerns;

use JesseGall\LightspeedSDK\Exceptions\IdNullException;
use JesseGall\LightspeedSDK\Exceptions\Lightspeed\ResourceNotFoundException;
use JesseGall\LightspeedSDK\LightspeedApi;
use JesseGall\Resources\ResourceCollection;

/**
 * @template T of \JesseGall\Resources\Resource
 */
trait LightspeedResource
{

    /**
     * Indicates if the resource exists on the remote server
     *
     * @var bool
     */
    protected bool $exists = false;

    /**
     * @param array $params
     * @return int
     */
    public static function count(array $params = []): int
    {
        return LightspeedApi::count((new static)->getEndpoint(), $params);
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

        $this->merge($data, false);

        return $this->exists = true;
    }

    /**
     * Loads the latest data from the remote source.
     *
     * Warning: this will overwrite any local changes
     *
     * @return bool
     */
    public function refresh(): bool
    {
        $id = $this->getId();

        $this->clear();

        $this->setId($id);

        return $this->hydrate();
    }

    /**
     * Save the local changes to the remote source.
     * Return true when successfully saved.
     *
     * @return bool
     */
    public function save(): bool
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

        $deleted = is_null($response);

        if ($deleted) {
            $this->exists = false;
        }

        return $deleted;
    }

    /**
     * Returns true when the resource exists on the remote server
     *
     * @return bool
     */
    public function exists(): bool
    {
        return $this->exists;
    }

}