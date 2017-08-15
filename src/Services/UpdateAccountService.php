<?php

namespace WSW\SiftScience\Services;

use WSW\SiftScience\Events\UpdateAccount;
use WSW\SiftScience\Support\Traits\Transformers\Fractal;
use WSW\SiftScience\Transformers\Events\AccountTransformer;

/**
 * Class UpdateAccountService
 *
 * @package WSW\SiftScience\Services
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class UpdateAccountService extends BaseService
{
    use Fractal;

    /**
     * @return UpdateAccount
     */
    public function updateAccountBuilder()
    {
        return new UpdateAccount();
    }

    /**
     * @param UpdateAccount $event
     *
     * @return bool
     */
    public function update(UpdateAccount $event)
    {
        $event->setApiKey($this->credentials->getApiKey());
        $body = $this->loadItem($event, new AccountTransformer)->toJson();
        $this->post(static::ENDPOINT, $body);

        return true;
    }
}
