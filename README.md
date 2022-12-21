# php-lightspeed-sdk (eCom)

[![Build](https://github.com/jessegall/php-lightspeed-sdk/actions/workflows/php.yml/badge.svg)](https://github.com/jessegall/php-lightspeed-sdk/actions/workflows/php.yml)

This package is a comprehensive set of tools for interacting with the Lightspeed eCommerce API
in PHP. It includes classes for each of the Lightspeed resources, allowing you to perform CRUD operations and
manage relations easily. Whether you're building an application that integrates with Lightspeed or looking for a simple
way to manage your online store, this package has you covered.

## Table of contents

- [Installation](#installation)
- [Usage](#usage)
- [Working with relations](#working-with-relations)
- [Available resources](#available-resources)

## Introduction

This package provides a set of resource classes for interacting with the Lightspeed eCommerce API in PHP.
It allows you to perform CRUD (create, read, update, delete) operations on resources in the API, such as products,
customers, and orders. The package includes classes for each of the Lightspeed resources, such as `Product`, `Customer`,
and `Order`.

## Installation

You can install the package using Composer:

```bash
composer require jessegall/lightspeed-sdk
```

## Usage

To use the package, you will need to first set your Lightspeed API key and secret in your environment.
You can do this by creating a .env file in the root of your project and setting the
`LIGHTSPEED_API_KEY`, `LIGHTSPEED_API_SECRET`, `LIGHTSPEED_API_SERVER` and `LIGHTSPEED_API_LANGUAGE` variables:

```
LIGHTSPEED_API_KEY=your_api_key
LIGHTSPEED_API_SECRET=your_api_secret
LIGHTSPEED_API_SERVER=eu1
LIGHTSPEED_API_LANGUAGE=en
```

Next, you can use the LightspeedSDK class to load your API key and secret and set them on the SDK instance:

```php
use JesseGall\LightspeedSDK\LightspeedSDK;

$sdk = LightspeedSDK::instance();
$sdk->loadEnvironmentVariables();
```

Alternatively, you can set these values manually by using the `setServer`, `setKey`, `setSecret`, and `setLanguage`
methods of the LightspeedSDK class:

```php
$sdk = LightspeedSDK::instance();
$sdk->setServer('your-api-server');
$sdk->setKey('your-api-key');
$sdk->setSecret('your-api-secret');
$sdk->setLanguage('your-api-language');
```

You can then use the resource classes to perform CRUD operations on the corresponding resources in the Lightspeed API.

### Example: Working with Orders

To retrieve the total order count

```php
use JesseGall\LightspeedSDK\Resources\Order;

$count = Order::count();
````

To retrieve a collection of orders:

```php
$orders = Order::all();
```

To retrieve a single order by ID:

```php
$order = Order::find(123); 
```

To update an existing order:

```php
$order->setStatus('shipped');
$order->sync(); // Sync the order with lightspeed
```

### Example: Working with Products

To retrieve the total product count

```php
use JesseGall\LightspeedSDK\Resources\Product;

$count = Product::count();
```

To retrieve a collection of products:

```php
$products = Product::all();
```

To retrieve a single product by ID:

```php
$product = Product::find(123);
```

To create a new product:

```php
$productData = [
    'name' => 'My Product',
    'sku' => 'PROD-123',
    'price' => 10.99,
];

$product = Product::create($productData);
```

To update an existing product:

```php
$product->setName('Updated Product Name');
$product->sync();
```

To delete a product:

```php
$product->delete();
```

## Working with Relations

In the Lightspeed API, many resources have relations to other resources, such as a customer having many orders. When
working with these related resources in the SDK, you can lazy load the relations as needed.
To lazy load a relation, you can access the relation like you would any other property on the resource.
If the relation has not been loaded yet, it will be fetched from the API automatically.

```php
use JesseGall\LightspeedSDK\Resources\Customer;

$customer = Customer::find(123);

// This will lazy load the orders for the customer
$orders = $customer->getOrders();

// This will not make an additional API request, as the orders have already been loaded
$orders = $customer->getOrders();
```

By default, the SDK will lazy load relations when they are accessed. If you want to disable lazy loading for a resource,
you use can set the `setLazyLoadRelations` method to disable lazy loading for that resource:

```php
$customer = Customer::find(123);
$customer->setLazyLoadRelations(false);

// This will not lazy load the orders for the customer
$orders = $customer->getOrders();
```

You can also use the `loadRelation` method to explicitly load a relation for a resource.

```php
$customer = Customer::find(123);

// This will load the orders for the customer
$customer->loadRelation('orders');

// This will not make an additional API request, as the orders have already been loaded
$orders = $customer->getOrders();
```

## Available Resources

The following resources are available in the `jessegall/lightspeed-sdk` package:

- `Account`
- `AccountMetafield`
- `AccountPermissions`
- `AccountRatelimit`
- `Attribute`
- `Blog`
- `BlogArticle`
- `BlogArticleImage`
- `BlogArticleTag`
- `BlogComment`
- `BlogTag`
- `Brand`
- `BrandImage`
- `CategoriesProduct`
- `Category`
- `CategoryImage`
- `Contact`
- `Customer`
- `CustomerLogin`
- `CustomerMetafield`
- `CustomerToken`
- `CustomStatus`
- `Dashboard`
- `Deliverydate`
- `Discount`
- `DiscountRule`
- `Event`
- `ExternalService`
- `File`
- `Filter`
- `FilterValue`
- `Group`
- `GroupsCustomer`
- `Image`
- `Invoice`
- `InvoiceItem`
- `InvoiceMetafield`
- `Language`
- `Metafield`
- `Order`
- `OrderEvent`
- `OrderMetafield`
- `OrderProduct`
- `Paymentmethod`
- `Product`
- `ProductAttribute`
- `ProductFilterValue`
- `ProductImage`
- `ProductMetafield`
- `ProductRelation`
- `Quote`
- `QuotePaymentmethod`
- `QuoteProduct`
- `QuoteShippingmethod`
- `Redirect`
- `Resource`
- `Return`
- `Review`
- `Set`
- `Shipment`
- `ShipmentMetafield`
- `ShipmentProduct`
- `Shippingmethod`
- `ShippingmethodCountry`
- `ShippingmethodValue`
- `Shop`
- `ShopCompany`
- `ShopJavascript`
- `ShopLimits`
- `ShopMetafield`
- `ShopScript`
- `ShopTracking`
- `ShopWebsite`
- `Subscription`
- `Supplier`
- `Tag`
- `TagsProduct`
- `Tax`
- `TaxOverride`
- `Test`
- `Textpage`
- `ThemeCategory`
- `ThemeProduct`
- `Ticket`
- `TicketMessage`
- `Type`
- `TypesAttribute`
- `Variant`
- `VariantMetafield`
- `VariantMovement`
- `Webhook`