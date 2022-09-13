# php-lightspeed-sdk (eCom) (WIP)

A software development kit to make the lightspeed API a breeze to work with.

This package includes

* All API resources as a class
* Automatically hydrate relations by fetching remote data when missing
* The possibility to sync local changes with lightspeed

```
composer require jessegall/lightspeed-sdk
```

## Usage

### Get and navigate resources

```php
$order = (new Order())
            ->setId(1623550)
            ->hydrate() // Fetches the order data from lightspeed and fills the order
            ->getProducts() // Fetches the products data from lightspeed (when missing) and fills the products
            ->first() // Returns the first orderProduct of the collection
            ->getVariant(); // Fetches the variant from lightspeed (when missing) and fills the variant
```

Or something like this

```php
$order = new Order(1623555);

$order->hydrate();

foreach ($order->getProducts() as $orderProduct) {
    Mail::send($orderProduct->getCustomer()->getEmail(), new ExampleMail());    
    ...
}
```

### Fill resources with data

```php
$data = [
    'customer' =>  [
        'id' => 2178882,
        'createdAt': '2019-09-06T17:55:35+00:00',
        'updatedAt': '2019-09-06T17:56:21+00:00',
        'isConfirmed': false,
        'type': "registered",
        'lastOnlineAt': null,
        ...
    ]
]

$customer = new Customer($data['customer']);
```