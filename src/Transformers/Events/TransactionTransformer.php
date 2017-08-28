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
     * @param Transaction $event
     *
     * @return array
     */
    public function transform(Transaction $event)
    {
        $data = [
            '$type' => $event->getType(),
            '$api_key' => $event->getApiKey(),
            '$user_id' => $event->getUserId(),
            '$user_email' => $this->email($event->getUserEmail()),
            '$ip' => $event->getIp(),
            '$time' => $this->dateTime($event->getTime()),
            '$transaction_type' => $event->getTransactionType(),
            '$transaction_status' => $event->getTransactionStatus(),
            '$amount' => $this->amount($event->getAmount()),
            '$currency_code' => $this->currency($event->getAmount()),
            '$order_id' => $event->getOrderId(),
            '$transaction_id' => $event->getId(),
            '$payment_method' => $this->paymentMethod($event->getPaymentMethod()),
            '$billing_address' => $this->address($event->getBillingAddress()),
            '$shipping_address' => $this->address($event->getShippingAddress()),
            '$session_id' => $event->getSessionId(),
            '$seller_user_id' => $event->getSellerUserId(),
            '$transfer_recipient_user_id' => $event->getTransferRecipientUserId()
        ];

        return $this->result($event, $data);
    }
}
