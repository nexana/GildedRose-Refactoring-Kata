<?php

namespace App\QualityStrategy;


use PHPUnit\Framework\TestCase;

class IncreaseQualityStrategyTest extends TestCase
{

    public function testUpdateQualityIncreaseByOne()
    {
        $strategy = new IncreaseQualityStrategy();

        $currentQuality = 10;
        $expected = $currentQuality + 1;

        $newQuality = $strategy->updateQuality($currentQuality, 5);

        $this->assertEquals($expected, $newQuality);
    }


    public function testUpdateQualityDoesNotIncreaseWhenAlreadyAtMaximum()
    {
        $maximum = 50;
        $strategy = new IncreaseQualityStrategy($maximum);

        $currentQuality = $maximum;

        $newQuality = $strategy->updateQuality($currentQuality, 5);

        $this->assertEquals($maximum, $newQuality);
    }
}
