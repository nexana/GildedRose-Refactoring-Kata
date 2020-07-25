<?php

namespace App\SellIndaysStrategy;


use PHPUnit\Framework\TestCase;

class DefaultSellInDaysStrategyTest extends TestCase
{

    public function testUpdateSellInDaysDecreasesByOne()
    {
        $current = 20;
        $expect = $current - 1;

        $strategy = new DefaultSellInDaysStrategy();

        $newDays = $strategy->updateSellInDays($current);

        $this->assertEquals($expect, $newDays);
    }
}
