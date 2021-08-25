<?php

namespace Pinheiro\OmrLaravel\Tests;

use Pinheiro\OmrLaravel\Utils\Point;
use Pinheiro\OmrLaravel\Targets\TextTarget;
use PHPUnit\Framework\TestCase;

class TextTargetTest extends TestCase
{
    public function testCircleClassWillServeDefaultAttributes()
    {
        $pointA = new Point(1337, 1338);
        $pointB = new Point(1335, 1336);
        $text = new TextTarget('foo', $pointA, $pointB);

        $this->assertEquals('foo', $text->getId());
        $this->assertEquals($pointA, $text->getA());
        $this->assertEquals($pointB, $text->getB());

        $text->setImageBlob('bar');
        $this->assertEquals('bar', $text->getImageBlob());
    }
}
