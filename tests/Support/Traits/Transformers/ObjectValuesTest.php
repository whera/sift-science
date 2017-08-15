<?php

namespace WSW\SiftScience\Support\Traits\Transformers;

use DateTime;
use WSW\Email\Email;
use WSW\Money\Currency;
use WSW\Money\Money;
use WSW\SiftScience\TestCase;

/**
 * Class ObjectValuesTest
 *
 * @package WSW\SiftScience\Support\Traits\Transformers
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class ObjectValuesTest extends TestCase
{
    /**
     * @var \WSW\SiftScience\Support\Traits\Transformers\ObjectValues
     */
    private $trait;

    protected function setUp()
    {
        parent::setUp();

        $this->trait = $this->getMockForTrait(ObjectValues::class);
    }

    public function testEmailNull()
    {
        $this->assertEquals(null, $this->trait->email(null));
        $this->assertEquals(null, $this->trait->email('xxx'));
        $this->assertEquals(null, $this->trait->email('email@example.com'));
    }

    public function testEmailInstance()
    {
        $this->assertEquals('ronaldo@whera.com.br', $this->trait->email(new Email('ronaldo@whera.com.br')));
    }

    public function testAmountNull()
    {
        $this->assertEquals(null, $this->trait->amount(null));
        $this->assertEquals(null, $this->trait->amount('150.00'));
        $this->assertEquals(null, $this->trait->amount(150.00));
    }

    public function testAmountInstance()
    {
        $this->assertEquals('150000000', $this->trait->amount(new Money('150.00', new Currency('USD'))));
    }

    public function testCurrencyNull()
    {
        $this->assertEquals(null, $this->trait->currency(null));
        $this->assertEquals(null, $this->trait->currency('USD'));
    }

    public function testCurrencyInstance()
    {
        $this->assertEquals('USD', $this->trait->currency(new Currency('USD')));
    }

    public function testCurrencyInstanceMoney()
    {
        $this->assertEquals('USD', $this->trait->currency(new Money('150.00', new Currency('USD'))));
    }

    public function testDateTimeNull()
    {
        $this->assertEquals(null, $this->trait->dateTime(null));
        $this->assertEquals(null, $this->trait->dateTime('1988-02-01'));
    }

    public function testDateTimeInstance()
    {
        $now = new DateTime();
        $unix = $now->getTimestamp();

        $this->assertEquals($unix, $this->trait->dateTime($now));
    }
}
