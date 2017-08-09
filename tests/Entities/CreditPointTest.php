<?php

namespace WSW\SiftScience\Entities;

use WSW\SiftScience\TestCase;

/**
 * Class CreditPointTest
 *
 * @package WSW\SiftScience\Entities
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class CreditPointTest extends TestCase
{
    public function instanceCreditPoint()
    {
        $creditPoint = new CreditPoint();
        $creditPoint->setAmount(5000);
        $creditPoint->setCreditPointType('character xp points');

        return $creditPoint;
    }

    /**
     * @test
     */
    public function checkMethodsGets()
    {
        $creditPoint = $this->instanceCreditPoint();

        $this->assertEquals(5000, $creditPoint->getAmount());
        $this->assertEquals("character xp points", $creditPoint->getCreditPointType());
    }
}
