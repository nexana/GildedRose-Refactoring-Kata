<?php

namespace App\SellIndaysStrategy;

/**
 * The sell in days is static so remains the same
 *
 * Class StaticSellInDaysStrategy
 * @package App\SellIndaysStragegy
 */
class StaticSellInDaysStrategy implements UpdateSellInDaysStrategyInterface
{
    /**
     * @param int $currentDays
     *
     * @return int
     */
    public function updateSellInDays($currentDays): int
    {
        return $currentDays;
    }
}