<?php

namespace WSW\SiftScience\Entities;

use WSW\Money\Currency;
use WSW\Money\Money;
use WSW\Money\Percentage;
use WSW\SiftScience\TestCase;

/**
 * Class DiscountTest
 *
 * @package WSW\SiftScience\Entities
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class DiscountTest extends TestCase
{
    public function instanceDiscount()
    {
        $discount = new Discount();
        $discount->setAmount(new Money("115.94", new Currency("USD")));
        $discount->setPercentage(new Percentage("20%"));
        $discount->setMinimumPurchaseAmount(new Money("50", new Currency("USD")));

        return $discount;
    }

    /**
     * @test
     */
    public function checkValuesGets()
    {
        $discount = $this->instanceDiscount();

        $this->assertEquals(115940000, $discount->getAmount()->getMicros());
        $this->assertEquals(0.2, $discount->getPercentage()->getPercent());
        $this->assertEquals(50000000, $discount->getMinimumPurchaseAmount()->getMicros());
    }
}
