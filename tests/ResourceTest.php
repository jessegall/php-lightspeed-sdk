<?php

namespace JesseGall\LightspeedSDK\Tests;

use FilesystemIterator;
use JesseGall\LightspeedSDK\Resources\Resource;
use JesseGall\LightspeedSDK\Tests\TestClasses\ResourceFiller;
use JesseGall\Resources\ResourceCollection;

class ResourceTest extends TestCase
{

    public function test_test()
    {
        $filler = new ResourceFiller();

        foreach ($this->getDirClasses(__DIR__ . '/../src/Resources') as $type) {
            if ($type === Resource::class || ! is_subclass_of($type, Resource::class)) {
                continue;
            }

            $values = $filler->fill($order = new $type());

            $order->setFeedMissingRelations(false);

            foreach ($values as $key => $value) {
                if ($key === 'signout') {
                    continue;
                }

                try {
                    $actual = $order->{"get$key"}();
                } catch (\Throwable $e) {
                    dd($type, $key, $value, $e->getMessage());
                };

                if ($actual instanceof Resource) {
                    continue;
                }

                if ($actual instanceof ResourceCollection) {
                    continue;
                }

                $this->assertEquals($value, $actual, $key);
            }
        }
    }

    public function getDirClasses($dir)
    {
        $predeclaredClasses = get_declared_classes();

        $i = new FileSystemIterator($dir, FileSystemIterator::SKIP_DOTS);
        foreach ($i as $f) {
            require_once $f->getPathname();
        }

        return array_values(array_diff(get_declared_classes(), $predeclaredClasses));
    }

}