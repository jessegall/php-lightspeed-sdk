<?php

namespace JesseGall\LightspeedSDK\Tests\TestClasses;

use JesseGall\LightspeedSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;
use ReflectionNamedType;

class ResourceFiller_
{

    public function fill(Resource $resource): array
    {
        $reflection = new \ReflectionClass($resource);

        $exclude = [
            ...get_class_methods(Resource::class)
        ];

        $values = [];

        foreach ($reflection->getMethods() as $method) {
            if (! str_starts_with($method->getName(), 'get') || in_array($method->getName(), $exclude)) {
                continue;
            }

            $return = $method->getReturnType();

            if (! $return instanceof ReflectionNamedType) {
                continue;
            }

            $handle = lcfirst(str_replace('get', '', $method->getName()));

            if (! $handle) {
                continue;
            }

            $type = $return->getName();

            if (is_subclass_of($type, Resource::class) || $type === Resource::class) {
                $resource->set("$handle.resource", [
                    'embedded' => [],
                    'id' => 1,
                    'url' => 'url',
                ]);

                $values[$handle] = new $type;;

                continue;
            }

            if (is_subclass_of($type, ResourceCollection::class) || $type === ResourceCollection::class) {
                $resource->set("$handle.resource.embedded", [[]]);

                $values[$handle] = new $type(Resource::class, []);

                continue;
            }

            $resource->set($handle, $value = match ($type) {
                'string' => 'value',
                'int' => 1,
                'float' => 1.00,
                'bool' => true,
                'array' => [],
                default => null,
            });

            $values[$handle] = $value;
        }

        return $values;
    }

}