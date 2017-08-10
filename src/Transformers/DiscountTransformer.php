<?php

namespace WSW\SiftScience\Transformers;

use WSW\SiftScience\Entities\Discount;

/**
 * Class DiscountTransformer
 *
 * @package WSW\SiftScience\Transformers
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class DiscountTransformer extends AbstractTransformer
{
    /**
     * @param Discount $discount
     *
     * @return array
     */
    public function transform(Discount $discount)
    {
        return array_filter([
            '$percentage_off' => $discount->getPercentage()->getPercent(),
            '$amount' => $discount->getAmount()->getMicros(),
            '$currency_code' => $discount->getAmount()->getCurrency()->getCode(),
            '$minimum_purchase_amount' => $discount->getMinimumPurchaseAmount()->getMicros()
        ]);
    }
}
