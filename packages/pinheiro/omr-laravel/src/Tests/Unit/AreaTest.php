<?php

namespace Pinheiro\OmrLaravel\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Pinheiro\OmrLaravel\Utils\Area;

class AreaTest extends TestCase
{
	/**
     * @dataProvider area
     */
    public function testAreaShouldCalculateRightPercentageOfBlackPixels(Area $area)
    {
        $blackPixelsPercentage = $area->percentBlack();

        self::assertSame(30, $blackPixelsPercentage);
    }

    /**
     * @dataProvider area
     */
    public function testAreaShouldCalculateRightPercentageOfWhitePixels(Area $area)
    {
        $whitePixelsPercentage = $area->percentWhite();

        self::assertSame(70, $whitePixelsPercentage);
    }

    public function area()
    {
        return [
            '70 white pixels and 30 black pixels' => [
                new Area(100, 70, 30)
            ]
        ];
    }
}
