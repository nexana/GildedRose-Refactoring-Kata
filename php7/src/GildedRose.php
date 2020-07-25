<?php

namespace App;

final class GildedRose
{

    /** @var Item[] */
    private $items = [];

    /**
     * GildedRose constructor.
     *
     * @param Item[] $items
     */
    public function __construct(array $items)
    {
        $this->items = $items;
    }

    /**
     * run the daily update of the inventory
     */
    public function updateInventory()
    {
        foreach ($this->items as $item) {
            $item->updateQuality();
        }
    }
}

