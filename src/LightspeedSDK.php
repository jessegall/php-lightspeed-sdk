<?php

namespace JesseGall\LightspeedSDK;

use Closure;
use Dotenv\Dotenv;

class LightspeedSDK
{

    private static LightspeedSDK $instance;

    protected ?Closure $envResolver = null;
    protected array $env = [];


    private function __construct() { }

    public static function instance(): LightspeedSDK
    {
        if (! isset(self::$instance)) {
            self::$instance = new LightspeedSDK();
        }

        return self::$instance;
    }

    public function initialize(): void
    {
        $this->loadEnvironmentVariables();
    }

    public function getEnv(string $key): mixed
    {
        if ($this->envResolver) {
            return ($this->envResolver)($key);
        }

        return $this->env[$key] ?? null;
    }

    /**
     *
     * @return void
     */
    private function loadEnvironmentVariables(): void
    {
        $dotenv = Dotenv::createImmutable(__DIR__ . "/../");
        $this->env = $dotenv->load();
    }

    # --- Getters and setters ---

    /**
     * @return Closure|null
     */
    public function getEnvResolver(): ?Closure
    {
        return $this->envResolver;
    }

    /**
     * @param Closure|null $envResolver
     */
    public function setEnvResolver(?Closure $envResolver): void
    {
        $this->envResolver = $envResolver;
    }
}