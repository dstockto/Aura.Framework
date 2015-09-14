<?php
namespace Aura\Framework\View\Helper;

use Aura\Router\Map;
use Aura\Router\DefinitionFactory;
use Aura\Router\RouteFactory;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2012-11-20 at 11:33:45.
 */
class RouteTest extends \PHPUnit_Framework_TestCase
{
    protected $route;

    protected function setUp()
    {
        $map = new Map(new DefinitionFactory, new RouteFactory);
        $map->add('mock', '/foo/{:bar}');
        $this->route = new Route($map);
    }

    public function testMagicInvoke()
    {
        $actual = $this->route->__invoke('mock', ['bar' => 'zim']);
        $expect = '/foo/zim';
        $this->assertSame($expect, $actual);
    }
}
