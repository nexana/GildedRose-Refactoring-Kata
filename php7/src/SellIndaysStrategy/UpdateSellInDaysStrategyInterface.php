<?php

namespace App\SellIndaysStrategy;

interface UpdateSellInDaysStrategyInterface
{
    /**
     * @param integer $currentDays
     *
     * @return int
     */
    public function updateSellInDays($currentDays): int;

}