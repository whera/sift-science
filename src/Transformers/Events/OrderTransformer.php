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
     * @param AbstractOrder $order
     *
     * @return array
     */
    public function transform(AbstractOrder $order)
    {
        return array_filter([
            '$type' => $order->getType(),
            '$api_key' => $order->getApiKey(),
            '$user_id' => $order->getUserId(),
            '$session_id' => $order->getSession(),
            '$order_id' => $order->getOrder(),
            '$user_email' => $this->email($order->getUserEmail()),
            '$amount' => $this->amount($order->getAmount()),
            '$currency_code' => $this->currency($order->getAmount()),
            '$billing_address' => $this->address($order->getBillingAddress()),
            '$payment_methods' => $this->paymentMethods($order->getPaymentMethods()),
            '$shipping_address' => $this->address($order->getShippingAddress()),
            '$expedited_shipping' => $order->isExpeditedShipping(),
            '$shipping_method' => $order->getShippingMethod(),
            '$items' => $this->items($order->getItems()),
            '$seller_user_id' => $order->getSellerUserId(),
            '$promotions' => $this->promotions($order->getPromotions())
        ]);
    }
}
