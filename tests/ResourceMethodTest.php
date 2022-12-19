<?php

namespace JesseGall\LightspeedSDK\Tests;

use FilesystemIterator;
use JesseGall\LightspeedSDK\Resources\Resource;
use JesseGall\LightspeedSDK\Tests\TestClasses\ResourceFiller;
use JesseGall\Resources\ResourceCollection;

class ResourceMethodTest
{

    public static int $test;

    //public function test_resource_get_and_set_methods_return_expected_values()
    //{
    //    $filler = new ResourceFiller();
    //
    //    foreach ($this->getDirClasses(__DIR__ . '/../src/Resources') as $type) {
    //        if ($type === Resource::class || ! is_subclass_of($type, Resource::class)) {
    //            continue;
    //        }
    //
    //        $values = $filler->fill($resource = new $type());
    //
    //        $resource->setLazyLoadRelations(false);
    //
    //        foreach ($values as $key => $value) {
    //            if ($key === 'signout') {
    //                continue;
    //            }
    //
    //            $reflection = new \ReflectionClass($resource);
    //
    //            $method = $reflection->getMethod("get$key");
    //
    //            $returnType = $method->getReturnType();
    //
    //            if ($returnType instanceof \ReflectionNamedType) {
    //                $returnType = $returnType->getName();
    //            }
    //
    //            if (str_contains($returnType, '\Resource') && ! class_exists($returnType)) {
    //                $this->fail("$returnType was returned but is not a valid class");
    //            }
    //
    //            if (is_subclass_of($returnType, Resource::class)) {
    //                if (! array_key_exists('resource', $value)) {
    //                    $this->addWarning("Missing resource: $returnType");
    //                    continue;
    //                }
    //
    //                $this->assertEquals($value['resource']['id'], $resource->{"get{$key}Id"}());
    //
    //                $resource->{"set$key"}($expected = new $returnType([
    //                    'property' => 'one'
    //                ]));
    //
    //                $this->assertEquals($expected, $method->invoke($resource));
    //
    //                continue;
    //            }
    //
    //            if ($returnType === ResourceCollection::class) {
    //                $resource->{"set$key"}(new ResourceCollection(Resource::class, [
    //                    new Resource()
    //                ]));
    //
    //                $this->assertInstanceOf(ResourceCollection::class, $method->invoke($resource));
    //
    //                continue;
    //            }
    //
    //            $result = $method->invoke($resource);
    //
    //            $newValue = match (gettype($result)) {
    //                'string' => 'new value',
    //                'integer', 'double' => $result + 10,
    //                'boolean' => ! $result,
    //                'array' => [1, 2, 3],
    //                default => null,
    //            };
    //
    //            $resource->{"set$key"}($newValue);
    //
    //            $this->assertEquals($newValue, $method->invoke($resource));
    //        }
    //    }
    //}

    public function getDirClasses($dir)
    {
        $predeclaredClasses = get_declared_classes();

        $i = new FileSystemIterator($dir, FileSystemIterator::SKIP_DOTS);
        foreach ($i as $f) {
            try {
                require_once $f->getPathname();
            } catch (\Throwable) {
                continue;
            }
        }

        return array_values(array_diff(get_declared_classes(), $predeclaredClasses));
    }

}