<?php

namespace WSW\SiftScience\Services;

use WSW\SiftScience\Events\UpdateOrder;
use WSW\SiftScience\Support\Traits\Transformers\Fractal;
use WSW\SiftScience\Transformers\Events\OrderTransformer;

/**
 * Class UpdateOrderService
 *
 * @package WSW\SiftScience\Services
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class UpdateOrderService extends BaseService
{
    use Fractal;

    /**
     * @return UpdateOrder
     */
    public function updateOrderBuilder()
    {
        return new UpdateOrder();
    }

    /**
     * @param UpdateOrder $order
     *
     * @return bool
     */
    public function update(UpdateOrder $order)
    {
        $order->setApiKey($this->credentials->getApiKey());
        $body = $this->loadItem($order, new OrderTransformer)->toJson();
        $this->post(static::ENDPOINT, $body);

        return true;
    }
}
