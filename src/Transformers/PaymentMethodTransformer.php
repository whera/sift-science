<?php

namespace WSW\SiftScience\Transformers;

use WSW\Email\Email;
use WSW\SiftScience\Entities\PaymentMethod;

/**
 * Class PaymentMethodTransformer
 *
 * @package WSW\SiftScience\Transformers
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class PaymentMethodTransformer extends AbstractTransformer
{
    public function transform(PaymentMethod $paymentMethod)
    {
        return array_filter([
            '$payment_type' => $paymentMethod->getPaymentType(),
            '$payment_gateway' => $paymentMethod->getPaymentGateway(),
            '$card_bin' => $paymentMethod->getCardBin(),
            '$card_last4' => $paymentMethod->getCardLast4(),
            '$avs_result_code' => $paymentMethod->getAvsResultCode(),
            '$cvv_result_code' => $paymentMethod->getCvvResultCode(),
            '$verification_status' => $paymentMethod->getVerificationStatus(),
            '$routing_number' => $paymentMethod->getRoutingNumber(),
            '$decline_reason_code' => $paymentMethod->getDeclineReasonCode(),
            '$paypal_payer_id' => $paymentMethod->getPaypalPayerId(),
            '$paypal_payer_email' => (!$paymentMethod->getPaypalPayerEmail() instanceof Email)
                ? null
                :  $paymentMethod->getPaypalPayerEmail()->getEmail(),
            '$paypal_payer_status' => $paymentMethod->getPaypalPayerStatus(),
            '$paypal_address_status' => $paymentMethod->getPaypalAddressStatus(),
            '$paypal_protection_eligibility' => $paymentMethod->getPaypalProtectionEligibility(),
            '$paypal_payment_status' => $paymentMethod->getPaypalPaymentStatus(),
            '$stripe_cvc_check' => $paymentMethod->getStripeCvcCheck(),
            '$stripe_address_line1_check' => $paymentMethod->getStripeAddressLine1Check(),
            '$stripe_address_line2_check' => $paymentMethod->getStripeAddressLine2Check(),
            '$stripe_address_zip_check' => $paymentMethod->getStripeAddressZipCheck(),
            '$stripe_funding' => $paymentMethod->getStripeFunding(),
            '$stripe_brand' => $paymentMethod->getStripeBrand()
        ]);
    }
}
