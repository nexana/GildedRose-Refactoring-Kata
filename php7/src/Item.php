<?php

namespace App;

use App\QualityStrategy\UpdateQualityStrategyInterface;
use App\SellIndaysStrategy\UpdateSellInDaysStrategyInterface;

/*
 * Class Item
 * @package App
 */
class Item implements CanUpdateQuality
{
    /** @var string */
    private $name;
    /** @var integer */
    private $sellInNumberOfDays;
    /** @var integer */
    private $currentQuality;
    /** @var UpdateSellInDaysStrategyInterface */
    private $updateSellInDaysStrategy;
    /** @var UpdateQualityStrategyInterface */
    private $updateQualityStrategy;

    /**
     * Item constructor.
     *
     * @param string                            $name
     * @param int                               $sellInNumberOfDays
     * @param int                               $currentQuality
     * @param UpdateSellInDaysStrategyInterface $updateSellInDaysStrategy
     * @param UpdateQualityStrategyInterface    $updateQualityStrategy
     */
    public function __construct(
        $name,
        $sellInNumberOfDays,
        $currentQuality,
        UpdateSellInDaysStrategyInterface $updateSellInDaysStrategy,
        UpdateQualityStrategyInterface $updateQualityStrategy
    )
    {
        $this->name = $name;
        $this->sellInNumberOfDays = $sellInNumberOfDays;
        $this->currentQuality = $currentQuality;
        $this->updateSellInDaysStrategy = $updateSellInDaysStrategy;
        $this->updateQualityStrategy = $updateQualityStrategy;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return "{$this->name}, {$this->sellInNumberOfDays}, {$this->currentQuality}";
    }

    /**
     * @return void
     */
    public function updateQuality()
    {
        $this->sellInNumberOfDays = $this->updateSellInDaysStrategy->updateSellInDays($this->sellInNumberOfDays);
        $this->currentQuality = $this->updateQualityStrategy->updateQuality($this->currentQuality, $this->sellInNumberOfDays);
    }
}

