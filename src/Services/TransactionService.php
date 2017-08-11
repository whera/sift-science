<?php

namespace WSW\SiftScience\Services;

use WSW\SiftScience\Events\Transaction;
use WSW\SiftScience\Transformers\Events\TransactionTransformer;

/**
 * Class TransactionService
 *
 * @package WSW\SiftScience\Services
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class TransactionService extends BaseService
{
    /**
     * @return Transaction
     */
    public function createTransactionBuilder()
    {
        return new Transaction();
    }

    /**
     * @param Transaction $event
     *
     * @return bool
     */
    public function create(Transaction $event)
    {
        $event->setApiKey($this->credentials->getApiKey());
        $body = $this->item($event, new TransactionTransformer)->toJson();
        $this->post(static::ENDPOINT, $body);

        return true;
    }
}
