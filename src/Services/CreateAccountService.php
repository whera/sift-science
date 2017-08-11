<?php

namespace WSW\SiftScience\Services;

use WSW\SiftScience\Events\CreateAccount;
use WSW\SiftScience\Transformers\Events\AccountTransformer;

/**
 * Class CreateAccountService
 *
 * @package WSW\SiftScience\Services
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class CreateAccountService extends BaseService
{
    /**
     * @return CreateAccount
     */
    public function createAccountBuilder()
    {
        return new CreateAccount();
    }

    /**
     * @param CreateAccount $event
     *
     * @return bool
     */
    public function create(CreateAccount $event)
    {
        $event->setApiKey($this->credentials->getApiKey());
        $body = $this->item($event, new AccountTransformer)->toJson();
        $this->post(static::ENDPOINT, $body);

        return true;
    }
}
