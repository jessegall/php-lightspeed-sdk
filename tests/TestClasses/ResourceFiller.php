<?php

namespace JesseGall\LightspeedSDK\Tests\TestClasses;

use JesseGall\LightspeedSDK\Resources\Resource;

class ResourceFiller
{

    public function fill(Resource $resource)
    {
        $json = $this->getJson($resource);

        $resource->container($json);

        return $json;
    }

    private function getJson(Resource $resource)
    {
        $reflection = new \ReflectionClass($resource);

        $class = str_replace('_', '', $reflection->getShortName());

        return json_decode(
            file_get_contents(__DIR__ . '/../../generator/resources/' . lcfirst($class) . '.json'),
            true
        )[lcfirst($class)];
    }

}