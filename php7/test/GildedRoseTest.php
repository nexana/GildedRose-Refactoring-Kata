<?php

namespace App;

use App\QualityStrategy\UpdateQualityStrategyInterface;
use App\SellIndaysStrategy\UpdateSellInDaysStrategyInterface;

class GildedRoseTest extends \PHPUnit\Framework\TestCase
{

    public function testUpdateInventoryShouldCallUpdateQualityOfItems()
    {
        $mockSellDaysStrategy = $this->getMockBuilder(UpdateSellInDaysStrategyInterface::class)->getMock();
        $mockQualityStrategy = $this->getMockBuilder(UpdateQualityStrategyInterface::class)->getMock();
        $mockItem1 = $this->getMockBuilder(Item::class)
            ->setMethods(['updateQuality'])
            ->setConstructorArgs([
                'itemname', 5, 10,
                $mockSellDaysStrategy,
                $mockQualityStrategy,

            ])
            ->getMock();

        $mockItem2 = $this->getMockBuilder(Item::class)
            ->setMethods(['updateQuality'])
            ->setConstructorArgs([
                'itemname', 5, 10,
                $mockSellDaysStrategy,
                $mockQualityStrategy,

            ])
            ->getMock();

        $mockItem1->expects($this->once())
            ->method('updateQuality');

        $mockItem2->expects($this->once())
            ->method('updateQuality');

        $mockItems = [
            $mockItem1,
            $mockItem2,
        ];

        $gildedRose = new GildedRose($mockItems);

        $gildedRose->updateInventory();

    }

}
