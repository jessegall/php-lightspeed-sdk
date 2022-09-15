<?php

namespace JesseGall\LightspeedSDK\Tests;

use FilesystemIterator;
use JesseGall\LightspeedSDK\Resources\Resource;
use JesseGall\LightspeedSDK\Tests\TestClasses\ResourceFiller;
use JesseGall\Resources\ResourceCollection;

class ResourceMethodsTest extends TestCase
{

    public static int $test;

    public function test_resource_get_and_set_methods_return_expected_values()
    {
        $filler = new ResourceFiller();

        foreach ($this->getDirClasses(__DIR__ . '/../src/Resources') as $type) {
            if ($type === Resource::class || ! is_subclass_of($type, Resource::class)) {
                continue;
            }

            $values = $filler->fill($resource = new $type());

            $resource->setFeedMissingRelations(false);

            foreach ($values as $key => $value) {
                if ($key === 'signout') {
                    continue;
                }

                $reflection = new \ReflectionClass($resource);

                $method = $reflection->getMethod("get$key");

                $result = $method->invoke($resource);

                if ($result instanceof Resource) {
                    $this->assertEquals($value['resource']['id'], $resource->{"get{$key}Id"}());

                    $resource->{"set$key"}($expected = new (get_class($result))([
                        'property' => 'one'
                    ]));

                    $this->assertEquals($expected, $method->invoke($resource));

                    continue;
                }

                if ($result instanceof ResourceCollection) {
                    $resource->{"set$key"}($expected = new ResourceCollection($result->getType(), [
                        new ($result->getType())
                    ]));

                    $this->assertEquals($expected, $method->invoke($resource));

                    continue;
                }

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