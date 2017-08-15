<?php

namespace WSW\SiftScience\Services;

use WSW\SiftScience\Events\Chargeback;
use WSW\SiftScience\Support\Traits\Transformers\Fractal;
use WSW\SiftScience\Transformers\Events\ChargebackTransformer;

/**
 * Class ChargebackService
 *
 * @package WSW\SiftScience\Services
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class ChargebackService extends BaseService
{
    use Fractal;

    /**
     * @return Chargeback
     */
    public function createChargebackBuilder()
    {
        return new Chargeback();
    }

    /**
     * @param Chargeback $event
     *
     * @return bool
     */
    public function create(Chargeback $event)
    {
        $event->setApiKey($this->credentials->getApiKey());
        $body = $this->loadItem($event, new ChargebackTransformer)->toJson();
        $this->post(static::ENDPOINT, $body);

        return true;
    }
}
