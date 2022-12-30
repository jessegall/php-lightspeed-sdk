<?php

namespace JesseGall\LightspeedSDK;

use Closure;
use JesseGall\LightspeedSDK\Exceptions\UnknownMethodException;
use JesseGall\Proxy\Contracts\HandlesCache;
use JesseGall\Proxy\Forwarder\Contracts\Intercepts;
use JesseGall\Resources\Api;
use WebshopappApiClient;
use WebshopappApiException;

/**
 * @method static \WebshopappApiResourceAccount account()
 * @method static \WebshopappApiResourceAccountMetafields accountMetafields()
 * @method static \WebshopappApiResourceAccountPermissions accountPermissions()
 * @method static \WebshopappApiResourceAccountRatelimit accountRatelimit()
 * @method static \WebshopappApiResourceAdditionalcosts additionalcosts()
 * @method static \WebshopappApiResourceAttributes attributes()
 * @method static \WebshopappApiResourceBlogs blogs()
 * @method static \WebshopappApiResourceBlogsArticles blogsArticles()
 * @method static \WebshopappApiResourceBlogsArticlesImage blogsArticlesImage()
 * @method static \WebshopappApiResourceBlogsArticlesTags blogsArticlesTags()
 * @method static \WebshopappApiResourceBlogsComments blogsComments()
 * @method static \WebshopappApiResourceBlogsTags blogsTags()
 * @method static \WebshopappApiResourceBrands brands()
 * @method static \WebshopappApiResourceBrandsImage brandsImage()
 * @method static \WebshopappApiResourceCatalog catalog()
 * @method static \WebshopappApiResourceCategories categories()
 * @method static \WebshopappApiResourceCategoriesImage categoriesImage()
 * @method static \WebshopappApiResourceCategoriesProducts categoriesProducts()
 * @method static \WebshopappApiResourceCategoriesProductsBulk categoriesProductsBulk()
 * @method static \WebshopappApiResourceCheckouts checkouts()
 * @method static \WebshopappApiResourceCheckoutsOrder checkoutsOrder()
 * @method static \WebshopappApiResourceCheckoutsPayment_methods checkoutsPayment_methods()
 * @method static \WebshopappApiResourceCheckoutsProducts checkoutsProducts()
 * @method static \WebshopappApiResourceCheckoutsShipment_methods checkoutsShipment_methods()
 * @method static \WebshopappApiResourceCheckoutsValidate checkoutsValidate()
 * @method static \WebshopappApiResourceContacts contacts()
 * @method static \WebshopappApiResourceCountries countries()
 * @method static \WebshopappApiResourceCustomers customers()
 * @method static \WebshopappApiResourceCustomersLogin customersLogin()
 * @method static \WebshopappApiResourceCustomersMetafields customersMetafields()
 * @method static \WebshopappApiResourceCustomersTokens customersTokens()
 * @method static \WebshopappApiResourceDashboard dashboard()
 * @method static \WebshopappApiResourceDeliverydates deliverydates()
 * @method static \WebshopappApiResourceDiscountrules discountrules()
 * @method static \WebshopappApiResourceDiscounts discounts()
 * @method static \WebshopappApiResourceEvents events()
 * @method static \WebshopappApiResourceExternal_services external_services()
 * @method static \WebshopappApiResourceFiles files()
 * @method static \WebshopappApiResourceFilters filters()
 * @method static \WebshopappApiResourceFiltersValues filtersValues()
 * @method static \WebshopappApiResourceGroups groups()
 * @method static \WebshopappApiResourceGroupsCustomers groupsCustomers()
 * @method static \WebshopappApiResourceInvoices invoices()
 * @method static \WebshopappApiResourceInvoicesItems invoicesItems()
 * @method static \WebshopappApiResourceInvoicesMetafields invoicesMetafields()
 * @method static \WebshopappApiResourceLanguages languages()
 * @method static \WebshopappApiResourceLocations locations()
 * @method static \WebshopappApiResourceMetafields metafields()
 * @method static \WebshopappApiResourceOrders orders()
 * @method static \WebshopappApiResourceOrdersCredit ordersCredit()
 * @method static \WebshopappApiResourceOrdersMetafields ordersMetafields()
 * @method static \WebshopappApiResourceOrdersProducts ordersProducts()
 * @method static \WebshopappApiResourceOrdersCustomstatuses ordersCustomstatuses()
 * @method static \WebshopappApiResourceOrdersEvents ordersEvents()
 * @method static \WebshopappApiResourcePaymentmethods paymentmethods()
 * @method static \WebshopappApiResourceProducts products()
 * @method static \WebshopappApiResourceProductsAttributes productsAttributes()
 * @method static \WebshopappApiResourceProductsFiltervalues productsFiltervalues()
 * @method static \WebshopappApiResourceProductsImages productsImages()
 * @method static \WebshopappApiResourceProductsMetafields productsMetafields()
 * @method static \WebshopappApiResourceProductsRelations productsRelations()
 * @method static \WebshopappApiResourceQuotes quotes()
 * @method static \WebshopappApiResourceQuotesConvert quotesConvert()
 * @method static \WebshopappApiResourceQuotesPaymentmethods quotesPaymentmethods()
 * @method static \WebshopappApiResourceQuotesProducts quotesProducts()
 * @method static \WebshopappApiResourceQuotesShippingmethods quotesShippingmethods()
 * @method static \WebshopappApiResourceRedirects redirects()
 * @method static \WebshopappApiResourceReturns returns()
 * @method static \WebshopappApiResourceReviews reviews()
 * @method static \WebshopappApiResourceSets sets()
 * @method static \WebshopappApiResourceShipments shipments()
 * @method static \WebshopappApiResourceShipmentsMetafields shipmentsMetafields()
 * @method static \WebshopappApiResourceShipmentsProducts shipmentsProducts()
 * @method static \WebshopappApiResourceShippingmethods shippingmethods()
 * @method static \WebshopappApiResourceShippingmethodsCountries shippingmethodsCountries()
 * @method static \WebshopappApiResourceShippingmethodsValues shippingmethodsValues()
 * @method static \WebshopappApiResourceShop shop()
 * @method static \WebshopappApiResourceShopCompany shopCompany()
 * @method static \WebshopappApiResourceShopJavascript shopJavascript()
 * @method static \WebshopappApiResourceShopLimits shopLimits()
 * @method static \WebshopappApiResourceShopMetafields shopMetafields()
 * @method static \WebshopappApiResourceShopScripts shopScripts()
 * @method static \WebshopappApiResourceShopSettings shopSettings()
 * @method static \WebshopappApiResourceShopTracking shopTracking()
 * @method static \WebshopappApiResourceShopWebsite shopWebsite()
 * @method static \WebshopappApiResourceSubscriptions subscriptions()
 * @method static \WebshopappApiResourceSuppliers suppliers()
 * @method static \WebshopappApiResourceTags tags()
 * @method static \WebshopappApiResourceTagsProducts tagsProducts()
 * @method static \WebshopappApiResourceTaxes taxes()
 * @method static \WebshopappApiResourceTaxesOverrides taxesOverrides()
 * @method static \WebshopappApiResourceTextpages textpages()
 * @method static \WebshopappApiResourceThemeCategories themeCategories()
 * @method static \WebshopappApiResourceThemeProducts themeProducts()
 * @method static \WebshopappApiResourceTickets tickets()
 * @method static \WebshopappApiResourceTicketsMessages ticketsMessages()
 * @method static \WebshopappApiResourceTime time()
 * @method static \WebshopappApiResourceTypes types()
 * @method static \WebshopappApiResourceTypesAttributes typesAttributes()
 * @method static \WebshopappApiResourceVariants variants()
 * @method static \WebshopappApiResourceVariantsImage variantsImage()
 * @method static \WebshopappApiResourceVariantsMetafields variantsMetafields()
 * @method static \WebshopappApiResourceVariantsBulk variantsBulk()
 * @method static \WebshopappApiResourceVariantsMovements variantsMovements()
 * @method static \WebshopappApiResourceWebhooks webhooks()
 */
class LightspeedApi implements Api
{

    /**
     * The webshop api client
     *
     * @var WebshopappApiClientProxy
     */
    protected static WebshopappApiClientProxy $instance;

    /**
     * @throws WebshopappApiException|UnknownMethodException
     */
    public static function __callStatic(string $method, array $parameters)
    {
        if (method_exists(WebshopappApiClient::class, $method) || method_exists(WebshopappApiClientProxy::class, $method)) {
            return self::client()->{$method}(...$parameters);
        }

        return throw new UnknownMethodException($method);
    }

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

    public function count(string $resource, array $params = []): int
    {
        return self::client()->count($this->getResourceUrl($resource), $params);
    }

    public function get(string $resource, int|string $id = null, array $params = []): array
    {
        return self::client()->read($this->getResourceUrl($resource, $id), $params);
    }

    public function create(string $resource, array $data): array
    {
        return self::client()->create($this->getResourceUrl($resource), $data);
    }

    public function update(string $resource, int|string $id, array $data = []): array
    {
        return self::client()->update($this->getResourceUrl($resource, $id), $data);
    }

    public function delete(string $resource, int|string $id): void
    {
        self::client()->delete($this->getResourceUrl($resource, $id));
    }

    private function getResourceUrl(string $resourceType, int|string $id = null): string
    {
        $resource = new $resourceType;

        $endpoint = $resource->getEndpoint();

        return $id ? "$endpoint/$id" : $endpoint;
    }
}