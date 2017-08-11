<?php

namespace WSW\SiftScience\Transformers\Events;

use WSW\SiftScience\Events\Chargeback;
use WSW\SiftScience\Transformers\AbstractTransformer;

/**
 * Class ChargebackTransformer
 *
 * @package WSW\SiftScience\Transformers\Events
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class ChargebackTransformer extends AbstractTransformer
{
    /**
     * @param Chargeback $chargeback
     *
     * @return array
     */
    public function transform(Chargeback $chargeback)
    {
        return array_filter([
            '$order_id' => $chargeback->getOrder(),
            '$transaction_id' => $chargeback->getTransaction(),
            '$chargeback_state' => $chargeback->getChargebackState(),
            '$chargeback_reason' => $chargeback->getChargebackReason()
        ]);
    }
}
