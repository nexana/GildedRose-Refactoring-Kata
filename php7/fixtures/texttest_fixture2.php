<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\GildedRose;
use App\Item;
use App\QualityStrategy\DefaultQualityStrategy;
use App\QualityStrategy\DoubleDegradeQualityStrategy;
use App\QualityStrategy\IncreaseQualityStrategy;
use App\QualityStrategy\StaticQualityStrategy;
use App\SellIndaysStrategy\DefaultSellInDaysStrategy;
use App\SellIndaysStrategy\StaticSellInDaysStrategy;

echo "OMGHAI!\n";


$items = [
    new Item('+5 Dexterity Vest', 10, 20, new DefaultSellInDaysStrategy(), new DefaultQualityStrategy()),
    new Item('Aged Brie', 2, 0, new DefaultSellInDaysStrategy(), new IncreaseQualityStrategy()),
    new Item('Elixir of the Mongoose', 5, 7, new DefaultSellInDaysStrategy(), new DefaultQualityStrategy()),
    new Item('Sulfuras, Hand of Ragnaros', 0, 80, new StaticSellInDaysStrategy(), new StaticQualityStrategy()),
    new Item('Sulfuras, Hand of Ragnaros', -1, 80, new StaticSellInDaysStrategy(), new StaticQualityStrategy()),
    new Item('Backstage passes to a TAFKAL80ETC concert', 15, 20, new DefaultSellInDaysStrategy(), new IncreaseQualityStrategy()),
    new Item('Backstage passes to a TAFKAL80ETC concert', 10, 49, new DefaultSellInDaysStrategy(), new IncreaseQualityStrategy()),
    new Item('Backstage passes to a TAFKAL80ETC concert', 5, 49, new DefaultSellInDaysStrategy(), new IncreaseQualityStrategy()),
    // this conjured item does not work properly yet
    new Item('Conjured Mana Cake', 3, 6, new DefaultSellInDaysStrategy(), new DoubleDegradeQualityStrategy()),

];

$app = new GildedRose($items);

$days = 5;
if (count($argv) > 1) {
    $days = (int)$argv[1];
}

for ($i = 0; $i < $days; $i++) {
    echo("-------- day $i --------\n");
    echo("name, sellIn, quality\n");
    foreach ($items as $item) {
        echo $item . PHP_EOL;
    }
    echo PHP_EOL;
    $app->updateInventory();

}
