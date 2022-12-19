<?php

namespace JesseGall\LightspeedSDK\Resources\Concerns;

use JesseGall\LightspeedSDK\Api;
use JesseGall\LightspeedSDK\Exceptions\Lightspeed\ResourceNotFoundException;
use JesseGall\Resources\ResourceCollection;

/**
 * @template T of \JesseGall\Resources\Resource
 * @implements \JesseGall\Resources\RemoteResource<T>
 */
trait LightspeedResource
{

    /**
     * @param array $params
     * @return \JesseGall\Resources\RemoteResource<T>
     */
    public static function all(array $params = []): ResourceCollection
    {
        $response = Api::read((new static)->getEndpoint(), $params);

        if (! array_is_list($response)) {
            $response = [$response];
        }

        return static::collection($response);
    }

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

    public static function create(array $data = []): static
    {
        $resource = new static();

        $response = Api::create($resource->getEndpoint(), [
            $resource->getLightspeedResource() => $data
        ]);

        $resource->merge($response);

        return $resource;
    }

    public function hydrate(): bool
    {
        if (! ($id = $this->getId())) {
            return false;
        }

        $data = Api::read($this->url($id));

        $this->container($data);

        return true;
    }

    public function sync(): bool
    {
        if (! ($id = $this->getId())) {
            return false;
        }

        $response = Api::update($this->url($id), [
            $this->lightspeedResource => $this->container()
        ]);

        $this->merge($response);

        return true;
    }

    public function delete(): bool
    {
        if (! ($id = $this->getId())) {
            return false;
        }

        $response = Api::delete($this->url($id));

        return is_null($response);
    }
}