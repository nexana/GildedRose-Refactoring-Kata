<?php

namespace App\QualityStrategy;


class BackstagePassQualityStrategyTest extends \PHPUnit\Framework\TestCase
{

    public function testUpdateQualityReturnMaximumQualityWhenOriginalIsHigher()
    {
        $maxQuality = 80;
        $strategy = new BackstagePassQualityStrategy($maxQuality);

        $newQuality = $strategy->updateQuality(100, 20);

        $this->assertLessThanOrEqual($maxQuality, $newQuality);

    }

    public function testUpdateQualityReturnMaximumQualityWhenQualityIsMax()
    {
        $maxQuality = 50;
        $strategy = new BackstagePassQualityStrategy($maxQuality);

        $newQuality = $strategy->updateQuality($maxQuality, 20);

        $this->assertLessThanOrEqual($maxQuality, $newQuality);

    }


    public function testUpdateQualityReturnsZeroWhenItemAgeBelowZero()
    {
        $strategy = new BackstagePassQualityStrategy();

        $newQuality = $strategy->updateQuality(40, -1);

        $this->assertEquals(0, $newQuality);
    }

    public function testUpdateQualityIncreaseesByTwoWhenAgeIsLowerThan10AndHigherThan4()
    {
        $strategy = new BackstagePassQualityStrategy();

        $currentQuality = 10;
        $expected = $currentQuality + 2;

        $newQuality = $strategy->updateQuality(10, 5);

        $this->assertEquals($expected, $newQuality);
    }

    public function testUpdateQualityIncreaseesByThreeWhenAgeIsBetween4And0Inclusive()
    {
        $strategy = new BackstagePassQualityStrategy();

        $currentQuality = 10;
        $expected = $currentQuality + 3;

        $newQuality = $strategy->updateQuality(10, 4);

        $this->assertEquals($expected, $newQuality);
    }

    public function testUpdateQualityIncreaseesByOneWhenAgeIs10()
    {
        $strategy = new BackstagePassQualityStrategy();

        $currentQuality = 10;
        $expected = $currentQuality + 1;

        $newQuality = $strategy->updateQuality(10, 10);

        $this->assertEquals($expected, $newQuality);
    }

    public function testUpdateQualityIncreaseesByOneWhenAgeIsOver10()
    {
        $strategy = new BackstagePassQualityStrategy();

        $currentQuality = 10;
        $expected = $currentQuality + 1;

        $newQuality = $strategy->updateQuality(10, 11);

        $this->assertEquals($expected, $newQuality);
    }
}
