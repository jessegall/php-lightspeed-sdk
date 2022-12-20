<?php

namespace JesseGall\LightspeedSDK\Api\Interceptors\Concerns;

use JesseGall\LightspeedSDK\Resources\Resource;

trait MocksData
{

    protected function getMockData(Resource|string $resource): array
    {
        $jsonFile = $resource instanceof Resource
            ? $resource->getLightspeedResource()
            : $resource;

        $data = json_decode(file_get_contents(__DIR__ . "/../../../../resources/$jsonFile.json"), true);

        [$key] = array_keys($data);

        $data = $data[$key];

        if ($resource instanceof Resource && $resource->has('id')) {
            $data['id'] = $resource->getId();
        }

        return $data;
    }

}