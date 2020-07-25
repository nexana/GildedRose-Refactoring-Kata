<?php

namespace App\QualityStrategy;

class BackstagePassQualityStrategy implements UpdateQualityStrategyInterface
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
     * @param int $currentQuality
     *
     * @param int $itemAge
     *
     * @return int
     */
    public function updateQuality($currentQuality, $itemAge) : int
    {
        switch (true) {
            case $itemAge <= 0 :
                {
                    $currentQuality = 0;
                    break;
                }
            case $itemAge <= 5 :
                {
                    $currentQuality += 3;
                    break;
                }
            case $itemAge <= 10:
                {
                    $currentQuality += 2;
                    break;
                }
            default:
                {
                    $currentQuality++;
                    break;
                }
        }


        if ($currentQuality > $this->maximumQuality) {
            return $this->maximumQuality;
        }

        return $currentQuality;

    }
}