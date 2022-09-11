<?php

namespace JesseGall\LightspeedSDK;

use Dotenv\Dotenv;
use JesseGall\LightspeedSDK\Exceptions\MultipleInstancesException;

class LightspeedSDK
{

    private static ?LightspeedSDK $instance = null;

    protected array $env;

    public function __construct()
    {
        if (self::$instance) {
            throw new MultipleInstancesException();
        }

        self::$instance = $this;
    }

    public static function instance(): LightspeedSDK
    {
        return self::$instance;
    }

    public function initialize(): void
    {
        $this->loadEnvironmentVariables();
    }

    /**
     * @param string|null $key
     * @return array
     */
    public function getEnv(string $key = null): mixed
    {
        if ($key) {
            return $this->env[$key] ?? null;
        }
        return $this->env;
    }

    public function setEnv(array $env): void
    {
        $this->env = $env;
    }

    private function loadEnvironmentVariables(): void
    {
        $dotenv = Dotenv::createImmutable(__DIR__ . "/../");
        $this->env = $dotenv->load();
    }

    public static function __clearInstance(): void
    {
        self::$instance = null;
    }

}