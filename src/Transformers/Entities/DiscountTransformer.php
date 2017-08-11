<?php

namespace WSW\SiftScience\Transformers\Entities;

use WSW\SiftScience\Entities\Discount;
use WSW\SiftScience\Support\Traits\Transformers\ObjectValues;
use WSW\SiftScience\Transformers\AbstractTransformer;

/**
 * Class DiscountTransformer
 *
 * @package WSW\SiftScience\Transformers\Entities
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class DiscountTransformer extends AbstractTransformer
{
    use ObjectValues;
    /**
     * @param Discount $discount
     *
     * @return array
     */
    public function transform(Discount $discount)
    {
        return array_filter([
            '$percentage_off' => $discount->getPercentage()->getPercent(),
            '$amount' => $this->amount($discount->getAmount()),
            '$currency_code' => $this->currency($discount->getAmount()),
            '$minimum_purchase_amount' => $this->amount($discount->getMinimumPurchaseAmount())
        ]);
    }
}
