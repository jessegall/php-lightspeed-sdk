<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\LightspeedSDK\Api;
use JesseGall\Resources\Resource as BaseResource;
use JesseGall\Resources\ResourceCollection;

class Resource extends BaseResource
{
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->get('id');
    }

    /**
     * @param int $id
     * @return $this
     */
    public function setId(int $id): static
    {
        return $this->set('id', $id);
    }

    public function hydrate()
    {
        $this->set(
            (new Api())->client()->orders->get($this->getId())
        );

        return $this;
    }

    /**
     * @param string $key
     * @param class-string<\JesseGall\LightspeedSDK\Resources\Resource> $type
     * @return BaseResource|ResourceCollection|null
     * @throws \WebshopappApiException
     */
    public function relation(string $key, string $type): BaseResource|ResourceCollection|null
    {
        $relation = BaseResource::relation($key, $type);

        if (! $this->relationIsLoaded($key)) {
            $url = $this->getRelationUrl($key);

            $data = (new Api())->client()->read($url);

            $relation = $type::create($data);

            $this->setRelation($key, $relation);
        }

        return $relation;
    }

    public function getRelationUrl(string $key)
    {
        [$name] = explode('.', $key);

        return $this->get("$name.resource.url");
    }

}