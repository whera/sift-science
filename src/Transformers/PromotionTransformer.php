<?php

namespace WSW\SiftScience\Transformers;

use WSW\SiftScience\Entities\CreditPoint;
use WSW\SiftScience\Entities\Discount;
use WSW\SiftScience\Entities\Promotion;

/**
 * Class PromotionTransformer
 *
 * @package WSW\SiftScience\Transformers
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class PromotionTransformer extends AbstractTransformer
{
    /**
     * @param Promotion $promotion
     *
     * @return array
     */
    public function transform(Promotion $promotion)
    {
        return array_filter([
            '$promotion_id' => $promotion->getId(),
            '$status' => $promotion->getStatus(),
            '$failure_reason' => $promotion->getFailureReason(),
            '$description' => $promotion->getDescription(),
            '$referrer_user_id' => $promotion->getReferrerUserId(),
            '$discount' => $this->discount($promotion->getDiscount()),
            '$credit_point' => $this->creditPoint($promotion->getCreditPoint())
        ]);
    }

    /**
     * @param Discount $discount
     *
     * @return array
     */
    protected function discount($discount)
    {
        if (!$discount instanceof Discount) {
            return null;
        }

        return $this->loadItem($discount, new DiscountTransformer);
    }

    /**
     * @param CreditPoint $creditPoint
     *
     * @return array
     */
    protected function creditPoint($creditPoint)
    {
        if (!$creditPoint instanceof CreditPoint) {
            return null;
        }

        return $this->loadItem($creditPoint, new CreditPointTransformer);
    }
}
