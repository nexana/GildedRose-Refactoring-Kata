<?php

namespace App\QualityStrategy;

/**
 * Interface UpdateQualityStrategyInterface
 * @package App
 */
interface UpdateQualityStrategyInterface
{
    /**
     * @param int $currentQuality
     *
     * @param int $itemAge
     *
     * @return int
     */
    public function updateQuality(int $currentQuality, int $itemAge): int;

}