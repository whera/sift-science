<?php

namespace WSW\SiftScience\Services;

use WSW\Money\Money;
use WSW\SiftScience\Entities\Item;

/**
 * Class ItemTotalValue
 *
 * @package WSW\SiftScience\Services
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class ItemTotalValue implements ServiceContract
{
    /**
     * @var Item
     */
    private $item;

    /**
     * @param Item $item
     */
    public function __construct(Item $item)
    {
        $this->item = $item;
    }

    /**
     * @return Money
     */
    public function execute()
    {
        $newAmount = bcmul($this->item->getPrice()->getAmount(), $this->item->getQuantity(), Money::SCALE);

        return $this->item->getPrice()->newInstance($newAmount);
    }
}
