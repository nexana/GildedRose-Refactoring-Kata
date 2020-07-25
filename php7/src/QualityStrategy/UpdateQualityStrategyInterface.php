<?php

namespace App\QualityStrategy;

/**
 * Interface UpdateQualityStrategyInterface
 * @package App
 */
interface UpdateQualityStrategyInterface
{
    /**
     * @param $currentQuality
     *
     * @param $itemAge
     *
     * @return int
     */
    public function updateQuality($currentQuality, $itemAge): int;

}