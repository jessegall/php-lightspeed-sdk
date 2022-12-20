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

        $string = file_get_contents(__DIR__ . '/../resources/' . lcfirst($class) . '.json');

        $json = json_decode($string, true);

        if (is_null($json)) {
            return [];
        }

        return $json[lcfirst($class)];
    }

}