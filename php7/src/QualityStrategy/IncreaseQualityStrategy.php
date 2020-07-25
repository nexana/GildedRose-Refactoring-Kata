<?php

namespace App\QualityStrategy;

/**
 **
 * Class IncreaseQualityStrategy
 * @package App\QualityStrategy
 */
class IncreaseQualityStrategy implements UpdateQualityStrategyInterface
{
    /**
     * @var integer
     */
    protected $maximumQuality;

    /**
     * IncreaseQualityStrategy constructor.
     *
     * @param integer $maximumQuality
     */
    public function __construct($maximumQuality = 50)
    {
        $this->maximumQuality = $maximumQuality;
    }


    /**
     * @param $currentQuality
     *
     * @param $itemAge
     *
     * @return int
     */
    public function updateQuality($currentQuality, $itemAge): int
    {
        if ($itemAge < 0) {
            $currentQuality = $currentQuality + 2;
        } else {
            $currentQuality++;
        }

        if ($currentQuality > $this->maximumQuality) {
            return $this->maximumQuality;
        }

        return $currentQuality;
    }
}