<?php

namespace WSW\SiftScience\Transformers\Events;

use WSW\SiftScience\Events\Chargeback;
use WSW\SiftScience\Support\Traits\Transformers\ObjectValues;
use WSW\SiftScience\Transformers\AbstractTransformer;

/**
 * Class ChargebackTransformer
 *
 * @package WSW\SiftScience\Transformers\Events
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class ChargebackTransformer extends AbstractTransformer
{
    use ObjectValues;

    /**
     * @param Chargeback $event
     *
     * @return array
     */
    public function transform(Chargeback $event)
    {
        return array_filter([
            '$type' => $event->getType(),
            '$api_key' => $event->getApiKey(),
            '$user_id' => $event->getUserId(),
            '$ip' => $event->getIp(),
            '$time' => $this->dateTime($event->getTime()),
            '$order_id' => $event->getOrder(),
            '$transaction_id' => $event->getTransaction(),
            '$chargeback_state' => $event->getChargebackState(),
            '$chargeback_reason' => $event->getChargebackReason()
        ]);
    }
}
