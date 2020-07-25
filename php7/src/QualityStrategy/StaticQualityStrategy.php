<?php

namespace App\QualityStrategy;


/**
 * @description: The quality is static, so never decreases
 *
 *
 * Class StaticQualityStrategy
 * @package    App\QualityStrategy
 */
class StaticQualityStrategy implements UpdateQualityStrategyInterface
{

    /**
     * @param int $currentQuality
     *
     * @param int $itemAge
     *
     * @return int
     */
    public function updateQuality(int $currentQuality, int $itemAge): int
    {
        return $currentQuality;
    }
}