<?php

namespace JesseGall\LightspeedSDK\Resources;

use InvalidArgumentException;
use JesseGall\HasArrayData\HasArrayData;
use JesseGall\LightspeedSDK\Api;
use JesseGall\LightspeedSDK\Exceptions\NotImplementedException;

class Resource
{
    use HasArrayData {
        HasArrayData::set as private __set;
        HasArrayData::get as private __get;
    }

    protected static Api $api;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function hydrate(): static
    {
        $this->set($this->endpoint()->get($this->getId()));

        return $this;
    }

    /**
     * Overrides the set method from the HasArrayData trait to make it a fluent setter
     *
     * @param array|string $key
     * @param mixed|null $value
     * @return $this
     */
    public function set(array|string $key, mixed $value = null): static
    {
        $this->__set($key, $value);

        return $this;
    }

    /**
     * Map the item corresponding with the given key to the given class.
     *
     * @param string $key
     * @param class-string<Resource> $class Subclass of Resource
     * @return Resource|Resource[]|null
     */
    public function mapTo(string $key, string $class): Resource|array|null
    {
        $data = $this->get($key);

        if (is_null($data)) {
            if (str_ends_with($key, '.embedded')) {
                [$name] = explode('.', $key);

                $url = $this->get("$name.resource.url");

                $data = $this->api()->client()->read($url);
            } else {
                return null;
            }
        }

        if (! is_array($data)) {
            throw new InvalidArgumentException('Key should point to an array');
        }

        if (! array_is_list($data)) {
            return new $class($data);
        }

        $list = [];

        foreach ($data as $_data) {
            $list[] = new $class($_data);
        }

        return $list;

    }

    protected function newResource(string $class, array $data = []): Resource
    {
        return new $class($data);
    }

    protected function api(): Api
    {
        if (! isset(self::$api)) {
            self::$api = new Api();
        }

        return self::$api;
    }

    protected function endpoint()
    {
        throw new NotImplementedException();
    }

}