<?php

namespace WSW\SiftScience\Transformers;

use WSW\SiftScience\Entities\Item;

/**
 * Class ItemTransformer
 *
 * @package WSW\SiftScience\Transformers
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class ItemTransformer extends AbstractTransformer
{
    public function transform(Item $item)
    {
        return array_filter([
            '$item_id' => $item->getId(),
            '$product_title' => $item->getTitle(),
            '$price' => $item->getPrice()->getMicros(),
            '$currency_code' => $item->getPrice()->getCurrency()->getCode(),
            '$quantity' => $item->getQuantity(),
            '$upc' => $item->getUpc(),
            '$sku' => $item->getSku(),
            '$brand' => $item->getBrand(),
            '$manufacturer' => $item->getManufacturer(),
            '$category' => $item->getCategory(),
            '$tags' => $item->getTags(),
            '$color' => $item->getColor()
        ]);
    }
}
