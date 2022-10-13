<?php

namespace JesseGall\LightspeedSDK\Tests;

use JesseGall\LightspeedSDK\Api;
use JesseGall\LightspeedSDK\Resources\Image;
use JesseGall\LightspeedSDK\Resources\Variant;

class VariantTest extends TestCase
{

    public function test_given_image_data_present_when_image_then_image()
    {
        Api::fake();

        $variant = Variant::find(12345678);

        $image = $variant->getImage();

        $this->assertNotNull($image);

        $this->assertInstanceOf(Image::class, $image);
    }

    public function test_given_image_data_missing_when_image_then_null()
    {
        Api::fake();

        $variant = Variant::find(12345678);

        $variant->setImage(null);

        $image = $variant->getImage();

        $this->assertNull($image);
    }

}