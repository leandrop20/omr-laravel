<?php

namespace Pinheiro\OmrLaravel\Tests;

use Pinheiro\OmrLaravel\Utils\Point;
use Pinheiro\OmrLaravel\Targets\CircleTarget;
use PHPUnit\Framework\TestCase;

class CircleTargetTest extends TestCase
{
    public function testCircleClassWillServeDefaultAttributes()
    {
        $point = new Point(1337, 1338);
        $circle = new CircleTarget('foo', $point, 1339);

        $this->assertEquals('foo', $circle->getId());
        $this->assertEquals(1339, $circle->getRadius());
        $this->assertEquals($point, $circle->getPoint());
    }
}
