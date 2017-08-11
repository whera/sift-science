<?php

namespace WSW\SiftScience;

use Faker\Factory;
use PHPUnit_Framework_TestCase;
use WSW\Money\Currency;
use WSW\Money\Money;
use WSW\Money\Percentage;
use WSW\SiftScience\Entities\Address;
use WSW\SiftScience\Entities\CreditPoint;
use WSW\SiftScience\Entities\Discount;
use WSW\SiftScience\Entities\PaymentMethod;
use WSW\SiftScience\Entities\Promotion;
use WSW\SiftScience\Support\AllowedValues\FailureReason;
use WSW\SiftScience\Support\AllowedValues\PaymentGateway;
use WSW\SiftScience\Support\AllowedValues\PaymentType;
use WSW\SiftScience\Support\AllowedValues\PromotionStatus;
use WSW\SiftScience\Support\AllowedValues\VerificationStatus;

/**
 * Class TestCase
 *
 * @package WSW\SiftScience
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class TestCase extends PHPUnit_Framework_TestCase
{
    /**
     * @var \Faker\Factory
     */
    protected $faker;

    protected function setUp()
    {
        parent::setUp();

        $this->faker = Factory::create();
    }

    protected function getPaymentMethod()
    {
        $item = new PaymentMethod();
        $item->setCardBin($this->faker->numerify('######'))
            ->setCardLast4($this->faker->numerify('####'))
            ->setPaymentType(PaymentType::CREDIT_CARD)
            ->setPaymentGateway(PaymentGateway::CIELO)
            ->setVerificationStatus(VerificationStatus::SUCCESS)
            ->setCvvResultCode($this->faker->numerify('###'));

        return $item;
    }

    protected function getAddress()
    {
        $item = new Address();
        $item->setName($this->faker->name)
            ->setPhone($this->faker->e164PhoneNumber)
            ->setCountry($this->faker->country)
            ->setAddress1($this->faker->address)
            ->setAddress2($this->faker->secondaryAddress)
            ->setCity($this->faker->city)
            ->setZipcode($this->faker->postcode)
            ->setRegion($this->faker->streetName);

        return $item;
    }

    protected function getPromotion()
    {
        $item = new Promotion();
        $item->setId($this->faker->randomDigitNotNull)
            ->setReferrerUserId($this->faker->randomDigitNotNull)
            ->setDescription($this->faker->realText(50))
            ->setStatus($this->faker->randomElement(PromotionStatus::getConstants()))
            ->setFailureReason($this->faker->randomElement(FailureReason::getConstants()))
            ->setDiscount($this->getDiscount())
            ->setCreditPoint($this->getCreditPoint());

        return $item;
    }

    protected function getDiscount()
    {
        $item = new Discount();
        $item->setAmount(new Money($this->faker->randomFloat(2), new Currency($this->faker->currencyCode)))
            ->setMinimumPurchaseAmount(
                new Money($this->faker->randomFloat(2), new Currency($this->faker->currencyCode))
            )
            ->setPercentage(new Percentage($this->faker->numberBetween(1, 100)));

        return $item;
    }

    protected function getCreditPoint()
    {
        $item = new CreditPoint();
        $item->setAmount($this->faker->numberBetween(1, 10000))
            ->setCreditPointType($this->faker->realText(50));

        return $item;
    }
}
