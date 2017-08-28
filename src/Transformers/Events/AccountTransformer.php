<?php

namespace WSW\SiftScience\Transformers\Events;

use stdClass;
use WSW\SiftScience\Events\AbstractAccount;
use WSW\SiftScience\Support\Traits\Transformers\ObjectValues;
use WSW\SiftScience\Support\Traits\Transformers\Relationships;
use WSW\SiftScience\Transformers\AbstractTransformer;

/**
 * Class Account
 *
 * @package WSW\SiftScience\Transformers\Events
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class AccountTransformer extends AbstractTransformer
{
    use ObjectValues;
    use Relationships;

    /**
     * @param AbstractAccount $event
     *
     * @return array
     */
    public function transform(AbstractAccount $event)
    {
        $data = [
            '$type' => $event->getType(),
            '$api_key' => $event->getApiKey(),
            '$user_id' => $event->getUserId(),
            '$session_id' => $event->getSessionId(),
            '$ip' => $event->getIp(),
            '$time' => $this->dateTime($event->getTime()),
            '$changed_password' => $event->isChangedPassword(),
            '$user_email' => $this->email($event->getUserEmail()),
            '$name' => $event->getName(),
            '$phone' => $event->getPhone(),
            '$referrer_user_id' => $event->getReferrerUserId(),
            '$payment_methods' => $this->paymentMethods($event->getPaymentMethods()),
            '$billing_address' => $this->address($event->getBillingAddress()),
            '$shipping_address' => $this->address($event->getShippingAddress()),
            '$social_sign_on_type' => $event->getSocialSignOnType()
        ];

        return $this->result($event, $data);
    }
}
