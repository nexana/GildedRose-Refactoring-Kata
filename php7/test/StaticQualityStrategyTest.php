<?php

namespace App\QualityStrategy;


use PHPUnit\Framework\TestCase;

class StaticQualityStrategyTest extends TestCase
{

    public function testUpdateQualityStaysTheSame()
    {
        $strategy = new StaticQualityStrategy();

        $currentQuality = 10;


        $newQuality = $strategy->updateQuality($currentQuality, random_int(-10, 100));

        $this->assertEquals($currentQuality, $newQuality);
    }

}
