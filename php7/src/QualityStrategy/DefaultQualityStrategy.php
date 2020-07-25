<?php

namespace App\QualityStrategy;

/**
 * Class DefaultQualityStrategy
 * @package App\QualityStrategy
 */
class DefaultQualityStrategy implements UpdateQualityStrategyInterface
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
        if ($itemAge < 0) {
            $currentQuality = $currentQuality - 2;
        } else {
            $currentQuality--;
        }

        if ($currentQuality < 0) {
            return 0;
        }

        return $currentQuality;
    }
}