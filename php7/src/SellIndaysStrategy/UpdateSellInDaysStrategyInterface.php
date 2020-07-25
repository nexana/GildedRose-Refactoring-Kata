<?php

namespace App\SellIndaysStrategy;

interface UpdateSellInDaysStrategyInterface
{
    /**
     * @param int $currentDays
     *
     * @return int
     */
    public function updateSellInDays(int $currentDays): int;

}