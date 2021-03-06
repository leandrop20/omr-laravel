<?php

namespace Pinheiro\OmrLaravel\Tests;

use Pinheiro\OmrLaravel\Utils\Point;
use Pinheiro\OmrLaravel\Targets\RectangleTarget;
use PHPUnit\Framework\TestCase;

class RectangleTargetTest extends TestCase
{
    public function testCircleClassWillServeDefaultAttributes()
    {
        $pointA = new Point(1337, 1338);
        $pointB = new Point(1335, 1336);
        $rectangle = new RectangleTarget('foo', $pointA, $pointB);

        $this->assertEquals('foo', $rectangle->getId());
        $this->assertEquals($pointA, $rectangle->getA());
        $this->assertEquals($pointB, $rectangle->getB());
    }
}
