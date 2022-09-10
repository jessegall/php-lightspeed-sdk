<?php

namespace JesseGall\LightspeedSDK\Resources;

use InvalidArgumentException;
use JesseGall\HasArrayData\HasArrayData;

class Resource
{
    use HasArrayData;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function mapTo(string $key, string $class)
    {
        if (! is_subclass_of($class, Resource::class)) {
            throw new InvalidArgumentException('Class should be a subclass of Resource');
        }

        $data = $this->get($key);

        if (is_null($data)) {
            return null;
        }

        if (! is_array($data)) {
            throw new InvalidArgumentException('Key should point to an array');
        }

        if (array_is_list($data)) {
            $list = [];

            foreach ($data as $_data) {
                $list[] = new $class($_data);
            }

            return $list;
        }

        return new $class($data);
    }

}