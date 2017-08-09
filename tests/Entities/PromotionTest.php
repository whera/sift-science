<?php

namespace WSW\SiftScience\Entities;

use WSW\Money\Currency;
use WSW\Money\Money;
use WSW\SiftScience\Support\AllowedValues\FailureReason;
use WSW\SiftScience\Support\AllowedValues\PromotionStatus;
use WSW\SiftScience\TestCase;

/**
 * Class PromotionTest
 *
 * @package WSW\SiftScience\Entities
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class PromotionTest extends TestCase
{
    public function instancePromotion()
    {
        $discount = new Discount();
        $discount->setAmount(new Money("50", new Currency('USD')));

        $creditPoint = new CreditPoint();
        $creditPoint->setAmount(500);
        $creditPoint->setCreditPointType("new user");

        $promotion = new Promotion();
        $promotion->setId('SPRING-1009');
        $promotion->setStatus(PromotionStatus::SUCCESS);
        $promotion->setFailureReason(FailureReason::ALREADY_USED);
        $promotion->setDescription('Spring coupon');
        $promotion->setReferrerUserId('john_smith_0123');
        $promotion->setDiscount($discount);
        $promotion->setCreditPoint($creditPoint);

        return $promotion;
    }

    /**
     * @test
     */
    public function checkMethodsGets()
    {
        $promotion = $this->instancePromotion();

        $this->assertEquals("SPRING-1009", $promotion->getId());
        $this->assertEquals('$success', $promotion->getStatus());
        $this->assertEquals('$already_used', $promotion->getFailureReason());
        $this->assertEquals("Spring coupon", $promotion->getDescription());
        $this->assertEquals("john_smith_0123", $promotion->getReferrerUserId());
        $this->assertInstanceOf(Discount::class, $promotion->getDiscount());
        $this->assertInstanceOf(CreditPoint::class, $promotion->getCreditPoint());
    }

    /**
     * @test
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage You should inform a valid failure reason.
     */
    public function checkExceptionFailureReason()
    {
        $promotion = new Promotion();
        $promotion->setFailureReason("XPTO");
    }

    /**
     * @test
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage You should inform a valid status.
     */
    public function checkExceptionStatus()
    {
        $promotion = new Promotion();
        $promotion->setStatus("XPTO");
    }
}
