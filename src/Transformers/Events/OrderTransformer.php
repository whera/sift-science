<?php

namespace WSW\SiftScience\Transformers\Events;

use WSW\SiftScience\Events\AbstractOrder;
use WSW\SiftScience\Support\Traits\Transformers\ObjectValues;
use WSW\SiftScience\Support\Traits\Transformers\Relationships;
use WSW\SiftScience\Transformers\AbstractTransformer;

/**
 * Class OrderTransformer
 *
 * @package WSW\SiftScience\Transformers\Events
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class OrderTransformer extends AbstractTransformer
{
    use ObjectValues;
    use Relationships;

    /**
     * @param AbstractOrder $event
     *
     * @return array
     */
    public function transform(AbstractOrder $event)
    {
        return array_filter([
            '$type' => $event->getType(),
            '$api_key' => $event->getApiKey(),
            '$user_id' => $event->getUserId(),
            '$session_id' => $event->getSessionId(),
            '$ip' => $event->getIp(),
            '$time' => $this->dateTime($event->getTime()),
            '$order_id' => $event->getOrder(),
            '$user_email' => $this->email($event->getUserEmail()),
            '$amount' => $this->amount($event->getAmount()),
            '$currency_code' => $this->currency($event->getAmount()),
            '$billing_address' => $this->address($event->getBillingAddress()),
            '$payment_methods' => $this->paymentMethods($event->getPaymentMethods()),
            '$shipping_address' => $this->address($event->getShippingAddress()),
            '$expedited_shipping' => $event->isExpeditedShipping(),
            '$shipping_method' => $event->getShippingMethod(),
            '$items' => $this->items($event->getItems()),
            '$seller_user_id' => $event->getSellerUserId(),
            '$promotions' => $this->promotions($event->getPromotions())
        ]);
    }
}
