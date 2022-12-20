<?php

namespace JesseGall\LightspeedSDK\Api;

use Closure;
use JesseGall\LightspeedSDK\LightspeedSDK;
use JesseGall\LightspeedSDK\WebshopApiClientProxy;
use JesseGall\Proxy\Contracts\HandlesCache;
use JesseGall\Proxy\Contracts\Intercepts;
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
 * @method static array read(string $url, array $params = [])
 * @method static array update(string $url, array $payload, array $options = [])
 * @method static array create(string $url, array $payload, array $options = [])
 * @method static array delete(string $url)
 */
class Api
{

    /**
     * The webshop api client
     *
     * @var WebshopApiClientProxy
     */
    protected static WebshopApiClientProxy $instance;

    /**
     * @throws WebshopappApiException
     */
    public static function __callStatic(string $method, array $parameters)
    {
        if (method_exists(WebshopappApiClient::class, $method)) {
            return self::client()->{$method}(...$parameters);
        }

        if (property_exists(WebshopappApiClient::class, $method)) {
            return self::client()->{$method};
        }

        return null;
    }

    /**
     * @return WebshopApiClientProxy
     */
    public static function client(): WebshopApiClientProxy
    {
        if (! isset(self::$instance)) {
            $sdk = LightspeedSDK::instance();

            self::$instance = new WebshopApiClientProxy(
                $sdk->get('api.server'),
                $sdk->get('api.key'),
                $sdk->get('api.secret'),
                $sdk->get('api.language')
            );
        }

        return self::$instance;
    }

    /**
     * Mock the api client
     *
     * @param Closure|null $interceptor
     * @return void
     */
    public static function mock(Closure $interceptor = null)
    {
        self::client()->mock($interceptor);
    }

    /**
     * Returns the cache handler
     *
     * @return HandlesCache
     */
    public static function getCacheHandler(): HandlesCache
    {
        return self::client()->getCache();
    }

    /**
     * Set the cache handler
     *
     * @param HandlesCache $handler
     * @return void
     */
    public static function setCacheHandler(HandlesCache $handler): void
    {
        self::client()->setCache($handler);
    }

}