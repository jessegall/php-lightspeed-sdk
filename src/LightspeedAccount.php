<?php

namespace JesseGall\LightspeedSDK;

class LightspeedAccount
{

    private string $server;
    private string $key;
    private string $secret;
    private string $language;

    public function __construct(string $server, string $key, string $secret, string $language)
    {
        $this->server = $server;
        $this->key = $key;
        $this->secret = $secret;
        $this->language = $language;
    }

    public function getServer(): string
    {
        return $this->server;
    }

    public function setServer(string $server): void
    {
        $this->server = $server;
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function setKey(string $key): void
    {
        $this->key = $key;
    }

    public function getSecret(): string
    {
        return $this->secret;
    }

    public function setSecret(string $secret): void
    {
        $this->secret = $secret;
    }

    public function getLanguage(): string
    {
        return $this->language;
    }

    public function setLanguage(string $language): void
    {
        $this->language = $language;
    }

}