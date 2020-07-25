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
     * @param $currentQuality
     *
     * @param $itemAge
     *
     * @return int
     */
    public function updateQuality($currentQuality, $itemAge) : int
    {
        $currentQuality -= 2;
        if ($currentQuality <= 0) {
            return 0;
        }

        return $currentQuality;
    }
}