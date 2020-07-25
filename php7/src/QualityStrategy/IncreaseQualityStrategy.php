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
    public function updateQuality($currentQuality, $itemAge) : int
    {
        if ($currentQuality < $this->maximumQuality) {
            $currentQuality++;
        }

        return $currentQuality;
    }
}