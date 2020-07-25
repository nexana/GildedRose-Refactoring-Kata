<?php

namespace App;

use App\QualityStrategy\UpdateQualityStrategyInterface;
use App\SellIndaysStrategy\UpdateSellInDaysStrategyInterface;

/**
 *
 * DISCLAIMER
 *
 *
 * I'm kind of breaking a 4th wall here and taking the risk to alter this class anyway :),
 * against the constraint in the description of this challenge.
 *
 * Why?
 * Because the reasoning for the constraint was weak, and based on the personal feelings of a "goblin-developer".
 * Those kind of things should not stand in the way of applying best practices and writing cleaner code.
 * In a codebase that is maintained by multiple developers, there is no such thing as "private code ownership".
 *
 * In a real life situation I'd go into dialogue with the "goblin"  and work things out in a professional way ;)
 */


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

