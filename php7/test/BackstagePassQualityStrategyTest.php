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

    public function testUpdateQualityReturnsZeroWhenItemAgeIsBelowOne()
    {
        $strategy = new BackstagePassQualityStrategy();

        $newQuality = $strategy->updateQuality(40, -5);

        $this->assertEquals(0, $newQuality);
    }

    public function testUpdateQualityReturnsZeroWhenItemAgeIsZero()
    {
        $strategy = new BackstagePassQualityStrategy();

        $newQuality = $strategy->updateQuality(40, 0);

        $this->assertEquals(0, $newQuality);
    }

    public function testUpdateQualityIncreaseesByTwoWhenAgeIsBetween10And5()
    {
        $strategy = new BackstagePassQualityStrategy();

        $currentQuality = 10;
        $expected = $currentQuality + 2;

        $newQuality = $strategy->updateQuality(10, 6);

        $this->assertEquals($expected, $newQuality);
    }

    public function testUpdateQualityIncreaseesByThreeWhenAgeIsBetween5And0()
    {
        $strategy = new BackstagePassQualityStrategy();

        $currentQuality = 10;
        $expected = $currentQuality + 3;

        $newQuality = $strategy->updateQuality(10, 1);

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
