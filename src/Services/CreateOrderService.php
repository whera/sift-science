<?php

namespace WSW\SiftScience\Services;

use WSW\SiftScience\Events\CreateOrder;
use WSW\SiftScience\Support\Traits\Transformers\Fractal;
use WSW\SiftScience\Transformers\Events\OrderTransformer;

/**
 * Class CreateOrderService
 *
 * @package WSW\SiftScience\Services
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class CreateOrderService extends BaseService
{
    use Fractal;

    /**
     * @return CreateOrder
     */
    public function createOrderBuilder()
    {
        return new CreateOrder();
    }

    /**
     * @param CreateOrder $order
     *
     * @return bool
     */
    public function create(CreateOrder $order)
    {
        $order->setApiKey($this->credentials->getApiKey());
        $body = $this->loadItem($order, new OrderTransformer)->toJson();
        $this->post(static::ENDPOINT, $body);

        return true;
    }
}
