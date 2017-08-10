<?php

namespace WSW\SiftScience\Services;

use WSW\SiftScience\Events\CreateOrder;
use WSW\SiftScience\Transformers\CreateOrderTransformer;

/**
 * Class CreateOrderService
 *
 * @package WSW\SiftScience\Services
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class CreateOrderService extends BaseService
{
    /**
     * @return CreateOrder
     */
    public function createOrderBuilder()
    {
        return new CreateOrder();
    }

    /**
     * @param CreateOrder $createOrder
     *
     * @return bool
     */
    public function send(CreateOrder $createOrder)
    {
        $createOrder->setApiKey($this->credentials->getApiKey());
        $body = $this->item($createOrder, new CreateOrderTransformer)->toJson();
        $this->post(static::ENDPOINT, $body);

        return true;
    }
}
