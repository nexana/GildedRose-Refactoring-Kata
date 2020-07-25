<?php

namespace App\SellIndaysStrategy;

class DefaultSellInDaysStrategy implements UpdateSellInDaysStrategyInterface
{
    /**
     * @param int $currentDays
     *
     * @return int
     */
    public function updateSellInDays(int $currentDays): int
    {
        return $currentDays - 1;
    }
}