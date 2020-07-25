<?php

namespace App\QualityStrategy;


use PHPUnit\Framework\TestCase;

class DoubleDegradeQualityStrategyTest extends TestCase
{

    public function testUpdateQualityDecreasesByTwoWhenAgeIsHigherThenZero()
    {
        $strategy = new DoubleDegradeQualityStrategy();

        $currentQuality = 10;
        $expected = $currentQuality - 2;

        $newQuality = $strategy->updateQuality(10, 11);

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
