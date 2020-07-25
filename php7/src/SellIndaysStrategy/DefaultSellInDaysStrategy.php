<?php

namespace App\SellIndaysStrategy;

class DefaultSellInDaysStrategy implements UpdateSellInDaysStrategyInterface
{
    /**
     * @param integer $currentDays
     *
     * @return integer
     */
    public function updateSellInDays($currentDays):int
    {
        return $currentDays - 1;
    }
}