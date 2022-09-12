<?php

namespace JesseGall\LightspeedSDK;

use Dotenv\Dotenv;

class LightspeedSDK
{

    private static LightspeedSDK $instance;

    protected array $env;

    private function __construct() { }

    public static function instance(): LightspeedSDK
    {
        if (! isset(self::$instance)) {
            self::$instance = new LightspeedSDK();
            self::$instance->initialize();
        }

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

    private function loadEnvironmentVariables(): void
    {
        $dotenv = Dotenv::createImmutable(__DIR__ . "/../");
        $this->env = $dotenv->load();
    }


}