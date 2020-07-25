<?php

namespace App\SellIndaysStrategy;

use PHPUnit\Framework\TestCase;

class StaticSellInDaysStrategyTest extends TestCase
{

    public function testUpdateSellInDaysRemainsTheSame()
    {
        $current = 20;

        $strategy = new StaticSellInDaysStrategy();

        $newDays = $strategy->updateSellInDays($current);

        $this->assertEquals($current, $newDays);
    }
}
