<?php

namespace JesseGall\LightspeedSDK\Exceptions\Lightspeed;


class ResourceNotFoundException extends \Exception
{

    /**
     * The resource type
     *
     * @var class-string<\JesseGall\LightspeedSDK\Resources\Resource> $type
     */
    private string $type;

    /**
     * The resource id
     *
     * @var string|int
     */
    private string|int $id;

    /**
     * @param class-string<\JesseGall\LightspeedSDK\Resources\Resource> $type
     */
    public function __construct(string $type, int|string $id)
    {
        parent::__construct("Resource $type with ID '$id' not found");

        $this->type = $type;
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return int|string
     */
    public function getId(): int|string
    {
        return $this->id;
    }

}