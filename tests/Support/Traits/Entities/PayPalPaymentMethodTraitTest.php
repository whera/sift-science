<?php

namespace WSW\SiftScience\Support\Traits;

use WSW\SiftScience\Entities\PaymentMethod;
use WSW\SiftScience\TestCase;

/**
 * Class PayPalPaymentMethodTraitTest
 * @package WSW\SiftScience\Support\Traits
 */
class PayPalPaymentMethodTraitTest extends TestCase
{
    /**
     * @return PaymentMethod
     */
    public function instancePaymentMethod()
    {
        $paymentMethod = new PaymentMethod();
        $paymentMethod->setPaypalPayerId("7E7MGXCWKTKK2");
        $paymentMethod->setPaypalPayerEmail("ronaldo@whera.com.br");
        $paymentMethod->setPaypalPayerStatus("active");
        $paymentMethod->setPaypalAddressStatus("active");
        $paymentMethod->setPaypalProtectionEligibility("a09da9d8a9s8das0dskdfwihasd8");
        $paymentMethod->setPaypalPaymentStatus("enable");

        return $paymentMethod;
    }

    /**
     * @test
     */
    public function methodsGet()
    {
        $paymentMethod = $this->instancePaymentMethod();

        $this->assertEquals('7E7MGXCWKTKK2', $paymentMethod->getPaypalPayerId());
        $this->assertEquals('ronaldo@whera.com.br', $paymentMethod->getPaypalPayerEmail());
        $this->assertEquals("active", $paymentMethod->getPaypalPayerStatus());
        $this->assertEquals("active", $paymentMethod->getPaypalAddressStatus());
        $this->assertEquals("a09da9d8a9s8das0dskdfwihasd8", $paymentMethod->getPaypalProtectionEligibility());
        $this->assertEquals("enable", $paymentMethod->getPaypalPaymentStatus());
    }

    /**
     * @test
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage You should inform a valid email
     */
    public function checkExceptionPaypalEmail()
    {
        $test = new PaymentMethod();
        $test->setPaypalPayerEmail("XPTO");
    }
}
