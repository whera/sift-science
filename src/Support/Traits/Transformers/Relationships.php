<?php

namespace WSW\SiftScience\Support\Traits\Transformers;

use WSW\SiftScience\Collections\Items;
use WSW\SiftScience\Collections\PaymentMethods;
use WSW\SiftScience\Collections\Promotions;
use WSW\SiftScience\Entities\Address;
use WSW\SiftScience\Entities\CreditPoint;
use WSW\SiftScience\Entities\Discount;
use WSW\SiftScience\Transformers\Entities\AddressTransformer;
use WSW\SiftScience\Transformers\Entities\CreditPointTransformer;
use WSW\SiftScience\Transformers\Entities\DiscountTransformer;
use WSW\SiftScience\Transformers\Entities\ItemTransformer;
use WSW\SiftScience\Transformers\Entities\PaymentMethodTransformer;
use WSW\SiftScience\Transformers\Entities\PromotionTransformer;

/**
 * Trait Relationships
 *
 * @package WSW\SiftScience\Support\Traits\Transformers
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
trait Relationships
{
    /**
     * @param $address|null
     *
     * @return array|null
     */
    public function address($address = null)
    {
        return (!$address instanceof Address) ? null : $this->loadItem($address, new AddressTransformer());
    }

    /**
     * @param Discount|null $discount
     *
     * @return array|null
     */
    public function discount($discount = null)
    {
        return (!$discount instanceof Discount) ? null : $this->loadItem($discount, new DiscountTransformer);
    }

    /**
     * @param CreditPoint|null $creditPoint
     *
     * @return array
     */
    public function creditPoint($creditPoint = null)
    {
        return (!$creditPoint instanceof CreditPoint)
            ? null
            : $this->loadItem($creditPoint, new CreditPointTransformer);
    }

    /**
     * @param PaymentMethods|null $collection
     *
     * @return array
     */
    public function paymentMethods($collection = null)
    {
        return (!$collection instanceof  PaymentMethods)
            ? null
            : $this->loadCollection($collection->getValues(), new PaymentMethodTransformer);
    }

    /**
     * @param Items|null $items
     *
     * @return array
     */
    public function items($items)
    {
        return (!$items instanceof Items)
            ? null
            : $this->loadCollection($items->getValues(), new ItemTransformer);
    }

    /**
     * @param Promotions|null $promotions
     *
     * @return array|null
     */
    public function promotions(Promotions $promotions = null)
    {
        return (!$promotions instanceof Promotions)
            ? null
            : $this->loadCollection($promotions->getValues(), new PromotionTransformer);
    }
}
