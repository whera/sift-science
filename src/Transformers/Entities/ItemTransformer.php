<?php

namespace WSW\SiftScience\Transformers\Entities;

use WSW\SiftScience\Entities\Item;
use WSW\SiftScience\Support\Traits\Transformers\ObjectValues;
use WSW\SiftScience\Transformers\AbstractTransformer;

/**
 * Class ItemTransformer
 *
 * @package WSW\SiftScience\Transformers\Entities
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class ItemTransformer extends AbstractTransformer
{
    use ObjectValues;

    /**
     * @param Item $item
     *
     * @return array
     */
    public function transform(Item $item)
    {
        return array_filter([
            '$item_id' => $item->getId(),
            '$product_title' => $item->getTitle(),
            '$price' => $this->amount($item->getPrice()),
            '$currency_code' => $this->amount($item->getPrice()),
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
