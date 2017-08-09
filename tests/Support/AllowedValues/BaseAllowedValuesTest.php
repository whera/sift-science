<?php

namespace WSW\SiftScience\Support\AllowedValues;

use WSW\SiftScience\TestCase;

/**
 * Class BaseAllowedValuesTest
 *
 * @package WSW\SiftScience\Support\AllowedValues
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class BaseAllowedValuesTest extends TestCase
{
    /**
     * @test
     */
    public function checkIsValidTrue()
    {
        $this->assertTrue(VerificationStatus::isValid(VerificationStatus::SUCCESS));
    }

    /**
     * @test
     */
    public function checkIsValidFalse()
    {
        $this->assertFalse(VerificationStatus::isValid(PaymentType::CASH));
    }

    /**
     * @test
     */
    public function checkGetConstants()
    {
        $this->assertInternalType('array', VerificationStatus::getConstants());
    }

    /**
     * @test
     */
    public function countResults()
    {
        $this->assertEquals(3, count(VerificationStatus::getConstants()));
    }

}
