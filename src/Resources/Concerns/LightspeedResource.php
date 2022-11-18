<?php

namespace JesseGall\LightspeedSDK\Resources\Concerns;

use JesseGall\LightspeedSDK\Api;
use JesseGall\LightspeedSDK\Exceptions\Lightspeed\ResourceNotFoundException;
use JesseGall\Resources\ResourceCollection;

trait LightspeedResource
{

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
        //Api::create()
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
        // TODO: Implement delete() method.
    }

}