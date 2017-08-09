<?php

namespace WSW\SiftScience\Entities;

use WSW\Money\Currency;
use WSW\Money\Money;
use WSW\SiftScience\Support\AllowedValues\PaymentGateway;
use WSW\SiftScience\Support\AllowedValues\PaymentType;
use WSW\SiftScience\Support\AllowedValues\VerificationStatus;
use WSW\SiftScience\TestCase;

/**
 * Class PaymentMethodTest
 *
 * @package WSW\SiftScience\Entities
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class PaymentMethodTest extends TestCase
{
    /**
     * @return PaymentMethod
     */
    public function instancePaymentMethod()
    {
        $paymentMethod = new PaymentMethod();
        $paymentMethod->setPaymentType(PaymentType::DIGITAL_WALLET);
        $paymentMethod->setPaymentGateway(PaymentGateway::CIELO);
        $paymentMethod->setCardBin("542486");
        $paymentMethod->setCardLast4("4242");
        $paymentMethod->setCvvResultCode("M");
        $paymentMethod->setAvsResultCode("Y");
        $paymentMethod->setVerificationStatus(VerificationStatus::PENDING);
        $paymentMethod->setRoutingNumber("9458");
        $paymentMethod->setDeclineReasonCode("CA9428");
        $paymentMethod->setStripeCvcCheck("123");
        $paymentMethod->setStripeFunding("ASD974A");
        $paymentMethod->setStripeBrand("ASDO8623");
        $paymentMethod->setStripeAddressLine1Check("pass");
        $paymentMethod->setStripeAddressLine2Check("pass");
        $paymentMethod->setStripeAddressZipCheck("pass");

        return $paymentMethod;
    }

    /**
     * @test
     */
    public function methodsGet()
    {
        $paymentMethod = $this->instancePaymentMethod();

        $this->assertEquals('$digital_wallet', $paymentMethod->getPaymentType());
        $this->assertEquals('$cielo', $paymentMethod->getPaymentGateway());
        $this->assertEquals("542486", $paymentMethod->getCardBin());
        $this->assertEquals("4242", $paymentMethod->getCardLast4());
        $this->assertEquals("M", $paymentMethod->getCvvResultCode());
        $this->assertEquals("Y", $paymentMethod->getAvsResultCode());
        $this->assertEquals('$pending', $paymentMethod->getVerificationStatus());
        $this->assertEquals("9458", $paymentMethod->getRoutingNumber());
        $this->assertEquals("CA9428", $paymentMethod->getDeclineReasonCode());
        $this->assertEquals("123", $paymentMethod->getStripeCvcCheck());
        $this->assertEquals("ASD974A", $paymentMethod->getStripeFunding());
        $this->assertEquals("ASDO8623", $paymentMethod->getStripeBrand());
        $this->assertEquals("pass", $paymentMethod->getStripeAddressLine1Check());
        $this->assertEquals("pass", $paymentMethod->getStripeAddressLine2Check());
        $this->assertEquals("pass", $paymentMethod->getStripeAddressZipCheck());
    }

    /**
     * @test
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage You should inform a valid payment type
     */
    public function checkExceptionPaymentType()
    {
        $test = new PaymentMethod();
        $test->setPaymentType("XPTO");
    }

    /**
     * @test
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage You should inform a valid payment gateway
     */
    public function checkExceptionPaymentGateway()
    {
        $test = new PaymentMethod();
        $test->setPaymentGateway("XPTO");
    }

    /**
     * @test
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage You should inform a valid verification status
     */
    public function checkExceptionVerificationStatus()
    {
        $test = new PaymentMethod();
        $test->setVerificationStatus("XPTO");
    }
}
