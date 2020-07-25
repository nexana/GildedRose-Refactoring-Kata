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
     * @param $currentQuality
     *
     * @param $itemAge
     *
     * @return int
     */
    public function updateQuality($currentQuality, $itemAge): int
    {
        return $currentQuality;
    }
}