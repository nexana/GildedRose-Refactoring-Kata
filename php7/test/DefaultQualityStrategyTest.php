<?php

namespace App\QualityStrategy;


use PHPUnit\Framework\TestCase;

class DefaultQualityStrategyTest extends TestCase
{

    public function testUpdateQualityDecreasesByOneWhenAgeIsHigherThenZero()
    {
        $strategy = new DefaultQualityStrategy();

        $currentQuality = 10;
        $expected = $currentQuality - 1;

        $newQuality = $strategy->updateQuality(10, 11);

        $this->assertEquals($expected, $newQuality);
    }

    public function testUpdateQualityDecreasesByOneWhenAgeIsZero()
    {
        $strategy = new DefaultQualityStrategy();

        $currentQuality = 10;
        $expected = $currentQuality - 1;

        $newQuality = $strategy->updateQuality(10, 0);

        $this->assertEquals($expected, $newQuality);
    }

    public function testUpdateQualityDecreasesByTwoWhenAgeIsBelowZero()
    {
        $strategy = new DefaultQualityStrategy();

        $currentQuality = 10;
        $expected = $currentQuality - 2;

        $newQuality = $strategy->updateQuality(10, -1);

        $this->assertEquals($expected, $newQuality);
    }


    public function testUpdateQualityDoesNotGoLowerThanZero()
    {
        $strategy = new DefaultQualityStrategy();

        $currentQuality = 0;
        $expected = 0;

        $newQuality = $strategy->updateQuality($currentQuality, -1);

        $this->assertEquals($expected, $newQuality);
    }
}
