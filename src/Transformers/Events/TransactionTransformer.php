<?php

namespace WSW\SiftScience\Transformers\Events;

use WSW\SiftScience\Events\Transaction;
use WSW\SiftScience\Support\Traits\Transformers\ObjectValues;
use WSW\SiftScience\Support\Traits\Transformers\Relationships;
use WSW\SiftScience\Transformers\AbstractTransformer;

/**
 * Class TransactionTransformer
 *
 * @package WSW\SiftScience\Transformers\Events
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class TransactionTransformer extends AbstractTransformer
{
    use Relationships;
    use ObjectValues;

    /**
     * @param Transaction $transaction
     *
     * @return array
     */
    public function transform(Transaction $transaction)
    {
        return array_filter([
            '$type' => $transaction->getType(),
            '$api_key' => $transaction->getApiKey(),
            '$user_id' => $transaction->getUserId(),
            '$user_email' => $this->email($transaction->getUserEmail()),
            '$transaction_type' => $transaction->getTransactionType(),
            '$transaction_status' => $transaction->getTransactionStatus(),
            '$amount' => $this->amount($transaction->getAmount()),
            '$currency_code' => $this->currency($transaction->getAmount()),
            '$order_id' => $transaction->getOrderId(),
            '$transaction_id' => $transaction->getId(),
            '$billing_address' => $this->address($transaction->getBillingAddress()),
            '$shipping_address' => $this->address($transaction->getShippingAddress()),
            '$session_id' => $transaction->getSessionId(),
            '$seller_user_id' => $transaction->getSellerUserId(),
            '$transfer_recipient_user_id' => $transaction->getTransferRecipientUserId()
        ]);
    }
}
