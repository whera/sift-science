<?php

namespace WSW\SiftScience\Transformers;

use WSW\SiftScience\Collections\Items;
use WSW\SiftScience\Collections\PaymentMethods;
use WSW\SiftScience\Collections\Promotions;
use WSW\SiftScience\Entities\Address;
use WSW\SiftScience\Events\CreateOrder;

/**
 * Class CreateOrderTransformer
 *
 * @package WSW\SiftScience\Transformers
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class CreateOrderTransformer extends AbstractTransformer
{
    /**
     * @param CreateOrder $createOrder
     *
     * @return array
     */
    public function transform(CreateOrder $createOrder)
    {
        return array_filter([
            '$type' => $createOrder->getType(),
            '$api_key' => $createOrder->getApiKey(),
            '$user_id' => $createOrder->getUserId(),
            '$session_id' => $createOrder->getSession(),
            '$order_id' => $createOrder->getOrder(),
            '$user_email' => $createOrder->getUserEmail()->getEmail(),
            '$amount' => $createOrder->getAmount()->getMicros(),
            '$currency_code' => $createOrder->getAmount()->getCurrency()->getCode(),
            '$billing_address' => $this->address($createOrder->getBillingAddress()),
            '$payment_methods' => $this->paymentMethods($createOrder->getPaymentMethods()),
            '$shipping_address' => $this->address($createOrder->getShippingAddress()),
            '$expedited_shipping' => $createOrder->isExpeditedShipping(),
            '$shipping_method' => $createOrder->getShippingMethod(),
            '$items' => $this->items($createOrder->getItems()),
            '$seller_user_id' => $createOrder->getSellerUserId(),
            '$promotions' => $this->promotions($createOrder->getPromotions())
        ]);
    }

    /**
     * @param Address $address
     *
     * @return array
     */
    protected function address(Address $address)
    {
        return $this->loadItem($address, new AddressTransformer());
    }

    /**
     * @param PaymentMethods $collection
     *
     * @return array
     */
    protected function paymentMethods(PaymentMethods $collection)
    {
        return $this->loadCollection($collection->getValues(), new PaymentMethodTransformer);
    }

    /**
     * @param Items $items
     *
     * @return array
     */
    protected function items(Items $items)
    {
        return $this->loadCollection($items->getValues(), new ItemTransformer);
    }

    /**
     * @param Promotions $promotions
     *
     * @return array
     */
    protected function promotions(Promotions $promotions)
    {
        return $this->loadCollection($promotions->getValues(), new PromotionTransformer);
    }
}
