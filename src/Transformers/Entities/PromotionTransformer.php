<?php

namespace WSW\SiftScience\Transformers\Entities;

use WSW\SiftScience\Entities\Promotion;
use WSW\SiftScience\Support\Traits\Transformers\Relationships;
use WSW\SiftScience\Transformers\AbstractTransformer;

/**
 * Class PromotionTransformer
 *
 * @package WSW\SiftScience\Transformers\Entities
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class PromotionTransformer extends AbstractTransformer
{
    use Relationships;

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
}
