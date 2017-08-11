<?php

namespace WSW\SiftScience\Services;

use WSW\SiftScience\Events\UpdateAccount;
use WSW\SiftScience\Transformers\Events\AccountTransformer;

/**
 * Class UpdateAccountService
 *
 * @package WSW\SiftScience\Services
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class UpdateAccountService extends BaseService
{
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
        $body = $this->item($event, new AccountTransformer)->toJson();
        $this->post(static::ENDPOINT, $body);

        return true;
    }
}
