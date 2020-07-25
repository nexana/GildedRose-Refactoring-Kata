<?php

namespace App\QualityStrategy;


/**
 *
 * Class StaticQualityStrategy
 * @package    App\QualityStrategy
 */
class DoubleDegradeQualityStrategy implements UpdateQualityStrategyInterface
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
        $currentQuality -= 2;
        if ($currentQuality <= 0) {
            return 0;
        }

        return $currentQuality;
    }
}