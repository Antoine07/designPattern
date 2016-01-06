<?php

use IoC\Container;

use IoC\Services\Bar;
use IoC\Services\Baz;
use IoC\Services\Foo;

class ContainerTest extends \PHPUnit_Framework_TestCase
{

    protected $container;

    public function setUp()
    {
        parent::setUp();
        $this->container = new Container;
    }

    public function testSetSimpleService()
    {
        $this->container->set('baz', function () {
            return new Baz;
        });

        $baz = $this->container->get('baz');

        $this->assertInstanceOf('IoC\Services\Baz', $baz);
    }

    public function testDependenciesHardCode()
    {
        $this->container->set('foo', function () {
            return new Foo;
        });

        $this->container->set('bar', function ($c) {
            return new Bar($c->get('foo'));
        });

        $bar = $this->container->get('bar');

        $this->assertInstanceOf('IoC\Services\Bar', $bar);
    }


    public function testNormalizeKeyContainer()
    {
        $reflection = new \ReflectionClass($this->container);
        $normalize = $reflection->getMethod('normalize');
        $normalize->setAccessible(true);

        $key = $normalize->invokeArgs($this->container, ['IoC\Services\Bar']);

        $this->assertEquals('bar', $key);
    }

    public function testMakeDependencies()
    {
        $this->container->set('foo', function () {
            return new Foo;
        });

        $bar = $this->container->make('IoC\Services\Bar');

        $this->assertInstanceOf('IoC\Services\Bar', $bar);
    }

    public function testComplexDependencies()
    {
        $this->container->set('foo', function () {
            return new Foo;
        });

        $this->container->set('baz', function () {
            return new Baz;
        });

        $this->container->set('param', function () {
            return 'param of SuperBar';
        });
        $superBar = $this->container->make('IoC\Services\SuperBar');
        $this->assertInstanceOf('IoC\Services\SuperBar', $superBar);

        $this->assertEquals('param of SuperBar', $superBar->getParam());
    }
}