<?php

namespace JesseGall\LightspeedSDK\Tests;

use JesseGall\LightspeedSDK\Resources\Account;
use JesseGall\LightspeedSDK\Resources\AccountMetafield;
use JesseGall\LightspeedSDK\Resources\AccountPermissions;
use JesseGall\LightspeedSDK\Resources\AccountRatelimit;
use JesseGall\LightspeedSDK\Resources\Attribute;
use JesseGall\LightspeedSDK\Resources\Blog;
use JesseGall\LightspeedSDK\Resources\BlogArticle;
use JesseGall\LightspeedSDK\Resources\BlogArticleImage;
use JesseGall\LightspeedSDK\Resources\BlogArticleTag;
use JesseGall\LightspeedSDK\Resources\BlogComment;
use JesseGall\LightspeedSDK\Resources\BlogTag;
use JesseGall\LightspeedSDK\Resources\Brand;
use JesseGall\LightspeedSDK\Resources\BrandImage;
use JesseGall\LightspeedSDK\Resources\CategoriesProduct;
use JesseGall\LightspeedSDK\Resources\Category;
use JesseGall\LightspeedSDK\Resources\CategoryImage;
use JesseGall\LightspeedSDK\Resources\Contact;
use JesseGall\LightspeedSDK\Resources\Customer;
use JesseGall\LightspeedSDK\Resources\CustomerLogin;
use JesseGall\LightspeedSDK\Resources\CustomerToken;
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
use JesseGall\LightspeedSDK\Resources\GroupsCustomer;
use JesseGall\LightspeedSDK\Resources\Image;
use JesseGall\LightspeedSDK\Resources\Invoice;
use JesseGall\LightspeedSDK\Resources\InvoiceItem;
use JesseGall\LightspeedSDK\Resources\InvoiceMetafield;
use JesseGall\LightspeedSDK\Resources\Language;
use JesseGall\LightspeedSDK\Resources\Metafield;
use JesseGall\LightspeedSDK\Resources\Order;
use JesseGall\LightspeedSDK\Resources\OrderEvent;
use JesseGall\LightspeedSDK\Resources\OrderMetafield;
use JesseGall\LightspeedSDK\Resources\OrderProduct;
use JesseGall\LightspeedSDK\Resources\Paymentmethod;
use JesseGall\LightspeedSDK\Resources\Product;
use JesseGall\LightspeedSDK\Resources\ProductAttribute;
use JesseGall\LightspeedSDK\Resources\ProductFilterValue;
use JesseGall\LightspeedSDK\Resources\ProductImage;
use JesseGall\LightspeedSDK\Resources\ProductMetafield;
use JesseGall\LightspeedSDK\Resources\ProductRelation;
use JesseGall\LightspeedSDK\Resources\Quote;
use JesseGall\LightspeedSDK\Resources\QuotePaymentmethod;
use JesseGall\LightspeedSDK\Resources\QuoteProduct;
use JesseGall\LightspeedSDK\Resources\QuoteShippingmethod;
use JesseGall\LightspeedSDK\Resources\Redirect;
use JesseGall\LightspeedSDK\Resources\Resource;
use JesseGall\LightspeedSDK\Resources\Return_;
use JesseGall\LightspeedSDK\Resources\Review;
use JesseGall\LightspeedSDK\Resources\Set;
use JesseGall\LightspeedSDK\Resources\Shipment;
use JesseGall\LightspeedSDK\Resources\ShipmentMetafield;
use JesseGall\LightspeedSDK\Resources\ShipmentProduct;
use JesseGall\LightspeedSDK\Resources\Shippingmethod;
use JesseGall\LightspeedSDK\Resources\ShippingmethodCountry;
use JesseGall\LightspeedSDK\Resources\ShippingmethodValue;
use JesseGall\LightspeedSDK\Resources\Shop;
use JesseGall\LightspeedSDK\Resources\ShopCompany;
use JesseGall\LightspeedSDK\Resources\ShopJavascript;
use JesseGall\LightspeedSDK\Resources\ShopLimits;
use JesseGall\LightspeedSDK\Resources\ShopMetafield;
use JesseGall\LightspeedSDK\Resources\ShopScript;
use JesseGall\LightspeedSDK\Resources\ShopTracking;
use JesseGall\LightspeedSDK\Resources\ShopWebsite;
use JesseGall\LightspeedSDK\Resources\Subscription;
use JesseGall\LightspeedSDK\Resources\Supplier;
use JesseGall\LightspeedSDK\Resources\Tag;
use JesseGall\LightspeedSDK\Resources\TagsProduct;
use JesseGall\LightspeedSDK\Resources\Tax;
use JesseGall\LightspeedSDK\Resources\TaxOverride;
use JesseGall\LightspeedSDK\Resources\Test;
use JesseGall\LightspeedSDK\Resources\Textpage;
use JesseGall\LightspeedSDK\Resources\ThemeCategory;
use JesseGall\LightspeedSDK\Resources\ThemeProduct;
use JesseGall\LightspeedSDK\Resources\Ticket;
use JesseGall\LightspeedSDK\Resources\TicketMessage;
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
                if (array_key_exists('resource', $value)) {
                    $this->assertEquals($value['resource']['id'], $resource->{"get{$key}Id"}());
                }

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

    public function test__Account_resource_methods_return_expected_values()
    {
        $this->testMethods(Account::class);
    }

    public function test_AccountMetafield_resource_methods_return_expected_values()
    {
        $this->testMethods(AccountMetafield::class);
    }

    public function test_AccountPermissions_resource_methods_return_expected_values()
    {
        $this->testMethods(AccountPermissions::class);
    }

    public function test_AccountRatelimit_resource_methods_return_expected_values()
    {
        $this->testMethods(AccountRatelimit::class);
    }

    public function test__Attribute_resource_methods_return_expected_values()
    {
        $this->testMethods(Attribute::class);
    }

    public function test__Blog_resource_methods_return_expected_values()
    {
        $this->testMethods(Blog::class);
    }

    public function test__BlogArticle_resource_methods_return_expected_values()
    {
        $this->testMethods(BlogArticle::class);
    }

    public function test__BlogArticleImage_resource_methods_return_expected_values()
    {
        $this->testMethods(BlogArticleImage::class);
    }

    public function test__BlogArticleTag_resource_methods_return_expected_values()
    {
        $this->testMethods(BlogArticleTag::class);
    }

    public function test__BlogComment_resource_methods_return_expected_values()
    {
        $this->testMethods(BlogComment::class);
    }

    public function test__BlogTag_resource_methods_return_expected_values()
    {
        $this->testMethods(BlogTag::class);
    }

    public function test__BrandImage_resource_methods_return_expected_values()
    {
        $this->testMethods(BrandImage::class);
    }

    public function test__Brand_resource_methods_return_expected_values()
    {
        $this->testMethods(Brand::class);
    }

    public function test__CategoriesProduct_resource_methods_return_expected_values()
    {
        $this->testMethods(CategoriesProduct::class);
    }

    public function test__CategoryImage_resource_methods_return_expected_values()
    {
        $this->testMethods(CategoryImage::class);
    }

    public function test__Category_resource_methods_return_expected_values()
    {
        $this->testMethods(Category::class);
    }

    public function test__Contact_resource_methods_return_expected_values()
    {
        $this->testMethods(Contact::class);
    }

    public function test__Customer_resource_methods_return_expected_values()
    {
        $this->testMethods(Customer::class);
    }

    public function test__CustomerLogin_resource_methods_return_expected_values()
    {
        $this->testMethods(CustomerLogin::class);
    }

    public function test__CustomStatus_resource_methods_return_expected_values()
    {
        $this->testMethods(CustomStatus::class);
    }

    public function test__Dashboard_resource_methods_return_expected_values()
    {
        $this->testMethods(Dashboard::class);
    }

    public function test__Deliverydate_resource_methods_return_expected_values()
    {
        $this->testMethods(Deliverydate::class);
    }

    public function test__Discount_resource_methods_return_expected_values()
    {
        $this->testMethods(Discount::class);
    }

    public function test__DiscountRule_resource_methods_return_expected_values()
    {
        $this->testMethods(DiscountRule::class);
    }

    public function test__Event_resource_methods_return_expected_values()
    {
        $this->testMethods(Event::class);
    }

    public function test__ExternalService_resource_methods_return_expected_values()
    {
        $this->testMethods(ExternalService::class);
    }

    public function test__File_resource_methods_return_expected_values()
    {
        $this->testMethods(File::class);
    }

    public function test__Filter_resource_methods_return_expected_values()
    {
        $this->testMethods(Filter::class);
    }

    public function test__FilterValue_resource_methods_return_expected_values()
    {
        $this->testMethods(FilterValue::class);
    }

    public function test__Group_resource_methods_return_expected_values()
    {
        $this->testMethods(Group::class);
    }

    public function test__GroupsCustomer_resource_methods_return_expected_values()
    {
        $this->testMethods(GroupsCustomer::class);
    }

    public function test__Image_resource_methods_return_expected_values()
    {
        $this->testMethods(Image::class);
    }

    public function test__Invoice_resource_methods_return_expected_values()
    {
        $this->testMethods(Invoice::class);
    }

    public function test__InvoiceItem_resource_methods_return_expected_values()
    {
        $this->testMethods(InvoiceItem::class);
    }

    public function test__InvoiceMetaField_resource_methods_return_expected_values()
    {
        $this->testMethods(InvoiceMetaField::class);
    }

    public function test__Language_resource_methods_return_expected_values()
    {
        $this->testMethods(Language::class);
    }

    public function test__Metafield_resource_methods_return_expected_values()
    {
        $this->testMethods(Metafield::class);
    }

    public function test__Order_resource_methods_return_expected_values()
    {
        $this->testMethods(Order::class);
    }

    public function test__OrderEvent_resource_methods_return_expected_values()
    {
        $this->testMethods(OrderEvent::class);
    }

    public function test__OrderMetafield_resource_methods_return_expected_values()
    {
        $this->testMethods(OrderMetafield::class);
    }

    public function test__OrderProduct_resource_methods_return_expected_values()
    {
        $this->testMethods(OrderProduct::class);
    }

    public function test__Paymentmethod_resource_methods_return_expected_values()
    {
        $this->testMethods(Paymentmethod::class);
    }

    public function test__Product_resource_methods_return_expected_values()
    {
        $this->testMethods(Product::class);
    }

    public function test__ProductAttribute_resource_methods_return_expected_values()
    {
        $this->testMethods(ProductAttribute::class);
    }

    public function test__ProductFilterValue_resource_methods_return_expected_values()
    {
        $this->testMethods(ProductFilterValue::class);
    }

    public function test__ProductImage_resource_methods_return_expected_values()
    {
        $this->testMethods(ProductImage::class);
    }

    public function test__ProductMetafield_resource_methods_return_expected_values()
    {
        $this->testMethods(ProductMetafield::class);
    }

    public function test__ProductRelation_resource_methods_return_expected_values()
    {
        $this->testMethods(ProductRelation::class);
    }

    public function test__Quote_resource_methods_return_expected_values()
    {
        $this->testMethods(Quote::class);
    }

    public function test__QuotePaymentMethod_resource_methods_return_expected_values()
    {
        $this->testMethods(QuotePaymentMethod::class);
    }

    public function test__QuoteProduct_resource_methods_return_expected_values()
    {
        $this->testMethods(QuoteProduct::class);
    }

    public function test__QuoteShippingMethod_resource_methods_return_expected_values()
    {
        $this->testMethods(QuoteShippingMethod::class);
    }

    public function test__Redirect_resource_methods_return_expected_values()
    {
        $this->testMethods(Redirect::class);
    }

    public function test__Return_resource_methods_return_expected_values()
    {
        $this->testMethods(Return_::class);
    }

    public function test__Review_resource_methods_return_expected_values()
    {
        $this->testMethods(Review::class);
    }

    public function test__Set_resource_methods_return_expected_values()
    {
        $this->testMethods(Set::class);
    }

    public function test__Shipment_resource_methods_return_expected_values()
    {
        $this->testMethods(Shipment::class);
    }

    public function test__ShipmentMetafield_resource_methods_return_expected_values()
    {
        $this->testMethods(ShipmentMetafield::class);
    }

    public function test__ShipmentProduct_resource_methods_return_expected_values()
    {
        $this->testMethods(ShipmentProduct::class);
    }

    public function test__Shippingmethod_resource_methods_return_expected_values()
    {
        $this->testMethods(Shippingmethod::class);
    }

    public function test__ShippingMethodCountry_resource_methods_return_expected_values()
    {
        $this->testMethods(ShippingMethodCountry::class);
    }

    public function test__ShippingMethodValue_resource_methods_return_expected_values()
    {
        $this->testMethods(ShippingMethodValue::class);
    }

    public function test__Shop_resource_methods_return_expected_values()
    {
        $this->testMethods(Shop::class);
    }

    public function test__ShopCompany_resource_methods_return_expected_values()
    {
        $this->testMethods(ShopCompany::class);
    }

    public function test__ShopJavascript_resource_methods_return_expected_values()
    {
        $this->testMethods(ShopJavascript::class);
    }

    public function test__ShopLimits_resource_methods_return_expected_values()
    {
        $this->testMethods(ShopLimits::class);
    }

    public function test__ShopMetafield_resource_methods_return_expected_values()
    {
        $this->testMethods(ShopMetafield::class);
    }

    public function test__ShopScript_resource_methods_return_expected_values()
    {
        $this->testMethods(ShopScript::class);
    }

    public function test__ShopTracking_resource_methods_return_expected_values()
    {
        $this->testMethods(ShopTracking::class);
    }

    public function test__ShopWebsite_resource_methods_return_expected_values()
    {
        $this->testMethods(ShopWebsite::class);
    }

    public function test__Subscription_resource_methods_return_expected_values()
    {
        $this->testMethods(Subscription::class);
    }

    public function test__Supplier_resource_methods_return_expected_values()
    {
        $this->testMethods(Supplier::class);
    }

    public function test__Tag_resource_methods_return_expected_values()
    {
        $this->testMethods(Tag::class);
    }

    public function test__TagsProduct_resource_methods_return_expected_values()
    {
        $this->testMethods(TagsProduct::class);
    }

    public function test__Tax_resource_methods_return_expected_values()
    {
        $this->testMethods(Tax::class);
    }

    public function test__TaxOverride_resource_methods_return_expected_values()
    {
        $this->testMethods(TaxOverride::class);
    }

    public function test__Test_resource_methods_return_expected_values()
    {
        $this->testMethods(Test::class);
    }

    public function test__Textpage_resource_methods_return_expected_values()
    {
        $this->testMethods(Textpage::class);
    }

    public function test__ThemeCategory_resource_methods_return_expected_values()
    {
        $this->testMethods(ThemeCategory::class);
    }

    public function test__ThemeProduct_resource_methods_return_expected_values()
    {
        $this->testMethods(ThemeProduct::class);
    }

    public function test__Ticket_resource_methods_return_expected_values()
    {
        $this->testMethods(Ticket::class);
    }

    public function test__TicketMessage_resource_methods_return_expected_values()
    {
        $this->testMethods(TicketMessage::class);
    }

    public function test__Type_resource_methods_return_expected_values()
    {
        $this->testMethods(Type::class);
    }

    public function test__TypesAttribute_resource_methods_return_expected_values()
    {
        $this->testMethods(TypesAttribute::class);
    }

    public function test__Variant_resource_methods_return_expected_values()
    {
        $this->testMethods(Variant::class);
    }

    public function test__VariantMovement_resource_methods_return_expected_values()
    {
        $this->testMethods(VariantMovement::class);
    }

    public function test__VariantMetafield_resource_methods_return_expected_values()
    {
        $this->testMethods(VariantMetafield::class);
    }

    public function test__Webhook_resource_methods_return_expected_values()
    {
        $this->testMethods(Webhook::class);
    }

}