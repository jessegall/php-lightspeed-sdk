<?php

namespace JesseGall\LightspeedSDK\Tests;

use JesseGall\LightspeedSDK\Resources\Account;
use JesseGall\LightspeedSDK\Resources\Blog;
use JesseGall\LightspeedSDK\Resources\Brand;
use JesseGall\LightspeedSDK\Resources\Category;
use JesseGall\LightspeedSDK\Resources\Contact;
use JesseGall\LightspeedSDK\Resources\Customer;
use JesseGall\LightspeedSDK\Resources\CustomStatus;
use JesseGall\LightspeedSDK\Resources\Dashboard;
use JesseGall\LightspeedSDK\Resources\Deliverydate;
use JesseGall\LightspeedSDK\Resources\Discount;
use JesseGall\LightspeedSDK\Resources\DiscountRule;
use JesseGall\LightspeedSDK\Resources\Event;
use JesseGall\LightspeedSDK\Resources\ExternalService;
use JesseGall\LightspeedSDK\Resources\File;
use JesseGall\LightspeedSDK\Resources\Filter;
use JesseGall\LightspeedSDK\Resources\FilterValue;
use JesseGall\LightspeedSDK\Resources\Group;
use JesseGall\LightspeedSDK\Resources\Image;
use JesseGall\LightspeedSDK\Resources\Invoice;
use JesseGall\LightspeedSDK\Resources\Language;
use JesseGall\LightspeedSDK\Resources\Metafield;
use JesseGall\LightspeedSDK\Resources\Order;
use JesseGall\LightspeedSDK\Resources\Paymentmethod;
use JesseGall\LightspeedSDK\Resources\Product;
use JesseGall\LightspeedSDK\Resources\Redirect;
use JesseGall\LightspeedSDK\Resources\Resource;
use JesseGall\LightspeedSDK\Resources\Return_;
use JesseGall\LightspeedSDK\Resources\Review;
use JesseGall\LightspeedSDK\Resources\Set;
use JesseGall\LightspeedSDK\Resources\Shipment;
use JesseGall\LightspeedSDK\Resources\Shippingmethod;
use JesseGall\LightspeedSDK\Resources\Shop;
use JesseGall\LightspeedSDK\Resources\Subscription;
use JesseGall\LightspeedSDK\Resources\Supplier;
use JesseGall\LightspeedSDK\Resources\Tag;
use JesseGall\LightspeedSDK\Resources\Tax;
use JesseGall\LightspeedSDK\Resources\Test;
use JesseGall\LightspeedSDK\Resources\Textpage;
use JesseGall\LightspeedSDK\Resources\ThemeCategory;
use JesseGall\LightspeedSDK\Resources\ThemeProduct;
use JesseGall\LightspeedSDK\Resources\Ticket;
use JesseGall\LightspeedSDK\Resources\Type;
use JesseGall\LightspeedSDK\Resources\TypesAttribute;
use JesseGall\LightspeedSDK\Resources\Variant;
use JesseGall\LightspeedSDK\Resources\VariantMetafield;
use JesseGall\LightspeedSDK\Resources\VariantMovement;
use JesseGall\LightspeedSDK\Resources\Webhook;
use JesseGall\LightspeedSDK\Tests\TestClasses\ResourceFiller;
use JesseGall\Resources\ResourceCollection;

class ResourcesTest extends TestCase
{

    private function testMethods(string $type)
    {
        $filler = new ResourceFiller();

        $values = $filler->fill($resource = new $type());

        $resource->setLazyLoadRelations(false);

        foreach ($values as $key => $value) {
            if ($key === 'signout') {
                continue;
            }

            $reflection = new \ReflectionClass($resource);

            $method = $reflection->getMethod("get$key");

            $returnType = $method->getReturnType();

            if ($returnType instanceof \ReflectionNamedType) {
                $returnType = $returnType->getName();
            }

            if (str_contains($returnType, '\Resource') && ! class_exists($returnType)) {
                $this->fail("$returnType was returned but is not a valid class");
            }

            if (is_subclass_of($returnType, Resource::class)) {
                $this->assertEquals($value['resource']['id'], $resource->{"get{$key}Id"}());

                $resource->{"set$key"}($expected = new $returnType([
                    'property' => 'one'
                ]));

                $this->assertEquals($expected, $method->invoke($resource));

                continue;
            }

            if ($returnType === ResourceCollection::class) {
                $resource->{"set$key"}(new ResourceCollection(Resource::class, [
                    new Resource()
                ]));

                $this->assertInstanceOf(ResourceCollection::class, $method->invoke($resource));

                continue;
            }

            $result = $method->invoke($resource);

            $newValue = match (gettype($result)) {
                'string' => 'new value',
                'integer', 'double' => $result + 10,
                'boolean' => ! $result,
                'array' => [1, 2, 3],
                default => null,
            };

            $resource->{"set$key"}($newValue);

            $this->assertEquals($newValue, $method->invoke($resource));
        }
    }

    public function test__Account_methods_return_expected_value()
    {
        $this->testMethods(Account::class);
    }

    public function test__Blog_methods_return_expected_value()
    {
        $this->testMethods(Blog::class);
    }

    public function test__Brand_methods_return_expected_value()
    {
        $this->testMethods(Brand::class);
    }

    public function test__Category_methods_return_expected_value()
    {
        $this->testMethods(Category::class);
    }

    public function test__Contact_methods_return_expected_value()
    {
        $this->testMethods(Contact::class);
    }

    public function test__Customer_methods_return_expected_value()
    {
        $this->testMethods(Customer::class);
    }

    public function test__CustomStatus_methods_return_expected_value()
    {
        $this->testMethods(CustomStatus::class);
    }

    public function test__Dashboard_methods_return_expected_value()
    {
        $this->testMethods(Dashboard::class);
    }

    public function test__Deliverydate_methods_return_expected_value()
    {
        $this->testMethods(Deliverydate::class);
    }

    public function test__Discount_methods_return_expected_value()
    {
        $this->testMethods(Discount::class);
    }

    public function test__DiscountRule_methods_return_expected_value()
    {
        $this->testMethods(DiscountRule::class);
    }

    public function test__Event_methods_return_expected_value()
    {
        $this->testMethods(Event::class);
    }

    public function test__ExternalService_methods_return_expected_value()
    {
        $this->testMethods(ExternalService::class);
    }

    public function test__File_methods_return_expected_value()
    {
        $this->testMethods(File::class);
    }

    public function test__Filter_methods_return_expected_value()
    {
        $this->testMethods(Filter::class);
    }

    public function test__FilterValue_methods_return_expected_value()
    {
        $this->testMethods(FilterValue::class);
    }

    public function test__Group_methods_return_expected_value()
    {
        $this->testMethods(Group::class);
    }

    public function test__Image_methods_return_expected_value()
    {
        $this->testMethods(Image::class);
    }

    public function test__Invoice_methods_return_expected_value()
    {
        $this->testMethods(Invoice::class);
    }

    public function test__Language_methods_return_expected_value()
    {
        $this->testMethods(Language::class);
    }

    public function test__Metafield_methods_return_expected_value()
    {
        $this->testMethods(Metafield::class);
    }

    public function test__Order_methods_return_expected_value()
    {
        $this->testMethods(Order::class);
    }

    public function test__Paymentmethod_methods_return_expected_value()
    {
        $this->testMethods(Paymentmethod::class);
    }

    public function test__Product_methods_return_expected_value()
    {
        $this->testMethods(Product::class);
    }

    public function test__Redirect_methods_return_expected_value()
    {
        $this->testMethods(Redirect::class);
    }

    public function test__Return_methods_return_expected_value()
    {
        $this->testMethods(Return_::class);
    }

    public function test__Review_methods_return_expected_value()
    {
        $this->testMethods(Review::class);
    }

    public function test__Set_methods_return_expected_value()
    {
        $this->testMethods(Set::class);
    }

    public function test__Shipment_methods_return_expected_value()
    {
        $this->testMethods(Shipment::class);
    }

    public function test__Shippingmethod_methods_return_expected_value()
    {
        $this->testMethods(Shippingmethod::class);
    }

    public function test__Shop_methods_return_expected_value()
    {
        $this->testMethods(Shop::class);
    }

    public function test__Subscription_methods_return_expected_value()
    {
        $this->testMethods(Subscription::class);
    }

    public function test__Supplier_methods_return_expected_value()
    {
        $this->testMethods(Supplier::class);
    }

    public function test__Tag_methods_return_expected_value()
    {
        $this->testMethods(Tag::class);
    }

    public function test__Tax_methods_return_expected_value()
    {
        $this->testMethods(Tax::class);
    }

    public function test__Test_methods_return_expected_value()
    {
        $this->testMethods(Test::class);
    }

    public function test__Textpage_methods_return_expected_value()
    {
        $this->testMethods(Textpage::class);
    }

    public function test__ThemeCategory_methods_return_expected_value()
    {
        $this->testMethods(ThemeCategory::class);
    }

    public function test__ThemeProduct_methods_return_expected_value()
    {
        $this->testMethods(ThemeProduct::class);
    }

    public function test__Ticket_methods_return_expected_value()
    {
        $this->testMethods(Ticket::class);
    }

    public function test__Type_methods_return_expected_value()
    {
        $this->testMethods(Type::class);
    }

    public function test__TypesAttribute_methods_return_expected_value()
    {
        $this->testMethods(TypesAttribute::class);
    }

    public function test__Variant_methods_return_expected_value()
    {
        $this->testMethods(Variant::class);
    }

    public function test__VariantMovement_methods_return_expected_value()
    {
        $this->testMethods(VariantMovement::class);
    }

    public function test__VariantMetafield_methods_return_expected_value()
    {
        $this->testMethods(VariantMetafield::class);
    }

    public function test__Webhook_methods_return_expected_value()
    {
        $this->testMethods(Webhook::class);
    }

}