<?php

namespace JesseGall\LightspeedSDK;

use Closure;
use JesseGall\Proxy\Contracts\HandlesCache;
use JesseGall\Proxy\Forwarder\Contracts\Intercepts;
use JesseGall\Resources\Api;
use WebshopappApiException;

class LightspeedApi implements Api
{

    /**
     * The webshop api client
     *
     * @var WebshopappApiClientProxy
     */
    protected static WebshopappApiClientProxy $instance;

    /**
     * @return WebshopappApiClientProxy
     */
    public static function client(): WebshopappApiClientProxy
    {
        if (! isset(self::$instance)) {
            $sdk = LightspeedSDK::instance();

            self::$instance = new WebshopappApiClientProxy(
                $sdk->get('api.server'),
                $sdk->get('api.key'),
                $sdk->get('api.secret'),
                $sdk->get('api.language')
            );
        }

        return self::$instance;
    }

    /**
     * Returns the cache handler
     *
     * @return HandlesCache
     */
    public static function getCacheHandler(): HandlesCache
    {
        return self::client()->getCacheHandler();
    }

    /**
     * Set the cache handler
     *
     * @param HandlesCache $handler
     * @return void
     */
    public static function setCacheHandler(HandlesCache $handler): void
    {
        self::client()->setCacheHandler($handler);
    }

    /**
     * Register interceptor
     *
     * @param Intercepts|Closure|string|array $interceptor
     * @return void
     */
    public static function registerInterceptor(Intercepts|Closure|string|array $interceptor): void
    {
        self::client()->getForwarder()->registerInterceptor($interceptor);
    }

    /**
     * Clear interceptor
     *
     * @return void
     */
    public static function clearInterceptors(): void
    {
        self::client()->getForwarder()->getInterceptors()->clear();
    }

    /**
     * Clear cache
     *
     * @return void
     */
    public static function clearCache(): void
    {
        self::client()->getCacheHandler()->clear();
    }

    /**
     * Get the data from the given url
     *
     * @param string $url
     * @return array
     */
    public function read(string $url): array
    {
        return self::client()->read($url);
    }

    /**
     * Get the total count of the given resource.
     *
     * @param string $resource
     * @param array $params
     * @return int
     */
    public function count(string $resource, array $params = []): int
    {
        return self::client()->count($this->parseUrl($resource), $params);
    }

    /**
     * Get data for the given resource or collection of resources.
     *
     * @param string $resource
     * @param int|string|null $id
     * @param array $params
     * @return array
     * @throws WebshopappApiException
     */
    public function get(string $resource, int|string $id = null, array $params = []): array
    {
        return self::client()->read($this->parseUrl($resource, $id), $params);
    }

    /**
     * Create a new resource.
     *
     * @param string $resource
     * @param array $data
     * @return array
     * @throws WebshopappApiException
     */
    public function create(string $resource, array $data): array
    {
        return self::client()->create($this->parseUrl($resource), $data);
    }

    /**
     * Update the given resource.
     *
     * @param string $resource
     * @param int|string $id
     * @param array $data
     * @return array
     * @throws WebshopappApiException
     */
    public function update(string $resource, int|string $id, array $data = []): array
    {
        return self::client()->update($this->parseUrl($resource, $id), $data);
    }

    /**
     * Delete the given resource.
     *
     * @param string $resource
     * @param int|string $id
     * @return void
     * @throws WebshopappApiException
     */
    public function delete(string $resource, int|string $id): void
    {
        self::client()->delete($this->parseUrl($resource, $id));
    }

    /**
     * Get the resource url.
     *
     * @param string $resourceType
     * @param int|string|null $id
     * @return string
     */
    private function parseUrl(string $resourceType, int|string $id = null): string
    {
        $resource = new $resourceType;

        $endpoint = $resource->getEndpoint();

        return $id ? "$endpoint/$id" : $endpoint;
    }
}