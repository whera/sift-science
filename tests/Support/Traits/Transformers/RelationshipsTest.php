<?php

namespace WSW\SiftScience\Support\Traits\Transformers;

use WSW\SiftScience\Collections\Items;
use WSW\SiftScience\Collections\PaymentMethods;
use WSW\SiftScience\Collections\Promotions;
use WSW\SiftScience\Entities\Address;
use WSW\SiftScience\Entities\CreditPoint;
use WSW\SiftScience\Entities\Discount;
use WSW\SiftScience\Entities\Item;
use WSW\SiftScience\Entities\PaymentMethod;
use WSW\SiftScience\Entities\Promotion;
use WSW\SiftScience\TestCase;

/**
 * Class RelationshipsTest
 *
 * @package WSW\SiftScience\Support\Traits\Transformers
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class RelationshipsTest extends TestCase
{
    /**
     * @var \WSW\SiftScience\Support\Traits\Transformers\Relationships
     */
    private $trait;

    protected function setUp()
    {
        parent::setUp();

        $this->trait = $this->getMockForTrait(Relationships::class);
    }

    public function testAddressNull()
    {
        $this->assertEquals(null, $this->trait->address('address'));
        $this->assertEquals(null, $this->trait->address('null'));
        $this->assertEquals(null, $this->trait->address(null));
    }

    public function testAddressArray()
    {
        $entity = new Address();
        $this->assertInternalType('array', $this->trait->address($entity));
    }

    public function testDiscountNull()
    {
        $this->assertEquals(null, $this->trait->discount('discount'));
        $this->assertEquals(null, $this->trait->discount('null'));
        $this->assertEquals(null, $this->trait->discount(null));
    }

    public function testDiscountArray()
    {
        $entity = new Discount();
        $this->assertInternalType('array', $this->trait->discount($entity));
    }

    public function testCreditPointNull()
    {
        $this->assertEquals(null, $this->trait->creditPoint('900'));
        $this->assertEquals(null, $this->trait->creditPoint('null'));
        $this->assertEquals(null, $this->trait->creditPoint(null));
    }

    public function testCreditPointArray()
    {
        $entity = new CreditPoint();
        $this->assertInternalType('array', $this->trait->creditPoint($entity));
    }

    public function testPaymentMethodsNull()
    {
        $this->assertEquals(null, $this->trait->paymentMethods('900'));
        $this->assertEquals(null, $this->trait->paymentMethods('null'));
        $this->assertEquals(null, $this->trait->paymentMethods(null));
    }

    public function testPaymentMethodsArray()
    {
        $collection = new PaymentMethods();
        $collection->add(new PaymentMethod());
        $collection->add(new PaymentMethod());
        $this->assertInternalType('array', $this->trait->paymentMethods($collection));
    }

    public function testPaymentMethodNull()
    {
        $this->assertEquals(null, $this->trait->paymentMethod('900'));
        $this->assertEquals(null, $this->trait->paymentMethod('null'));
        $this->assertEquals(null, $this->trait->paymentMethod(null));
    }

    public function testPaymentMethodInstance()
    {
        $this->assertInternalType('array', $this->trait->paymentMethod(new PaymentMethod));
    }

    public function testItemsNull()
    {
        $this->assertEquals(null, $this->trait->items('900'));
        $this->assertEquals(null, $this->trait->items('null'));
        $this->assertEquals(null, $this->trait->items(null));
    }

    public function testItemsArray()
    {
        $collection = new Items();
        $collection->add(new Item());
        $collection->add(new Item());
        $this->assertInternalType('array', $this->trait->items($collection));
    }

    public function testPromotionsNull()
    {
        $this->assertEquals(null, $this->trait->promotions('900'));
        $this->assertEquals(null, $this->trait->promotions('null'));
        $this->assertEquals(null, $this->trait->promotions(null));
    }

    public function testPromotionsArray()
    {
        $collection = new Promotions();
        $collection->add(new Promotion());
        $collection->add(new Promotion());
        $this->assertInternalType('array', $this->trait->promotions($collection));
    }
}
