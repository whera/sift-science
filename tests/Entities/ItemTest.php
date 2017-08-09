<?php

namespace WSW\SiftScience\Entities;

use WSW\Money\Currency;
use WSW\Money\Money;
use WSW\SiftScience\TestCase;

/**
 * Class ItemTest
 *
 * @package WSW\SiftScience\Entities
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class ItemTest extends TestCase
{
    /**
     * @return Item
     */
    public function instanceItem()
    {
        $item = new Item();
        $item->setId("B004834GQO");
        $item->setTitle("The Slanket Blanket-Texas Tea");
        $item->setPrice(new Money("39.99", new Currency("USD")));
        $item->setUpc("67862114510011");
        $item->setSku("004834GQ");
        $item->setBrand("Slanket");
        $item->setManufacturer("Slanket");
        $item->setCategory("Blankets & Throws");
        $item->setTags(["Awesome", "Wintertime specials"]);
        $item->setColor("Texas Tea");
        $item->setQuantity(6);

        return $item;
    }

    /**
     * @test
     */
    public function shouldConfigureTheAttributes()
    {
        $item = $this->instanceItem();

        $this->assertAttributeEquals("B004834GQO", "id", $item);
        $this->assertAttributeEquals("The Slanket Blanket-Texas Tea", "title", $item);
        $this->assertAttributeInstanceOf(Money::class, "price", $item);
        $this->assertAttributeEquals("67862114510011", "upc", $item);
        $this->assertAttributeEquals("004834GQ", "sku", $item);
        $this->assertAttributeEquals("Slanket", "brand", $item);
        $this->assertAttributeEquals("Slanket", "manufacturer", $item);
        $this->assertAttributeEquals("Blankets & Throws", "category", $item);
        $this->assertAttributeInternalType("array", "tags", $item);
        $this->assertAttributeEquals("Texas Tea", "color", $item);
        $this->assertAttributeEquals(6, "quantity", $item);
    }

    /**
     * @test
     */
    public function methodsGet()
    {
        $item = $this->instanceItem();

        $this->assertEquals("B004834GQO", $item->getId());
        $this->assertEquals("The Slanket Blanket-Texas Tea", $item->getTitle());
        $this->assertEquals(39990000, $item->getPrice()->getMicros());
        $this->assertEquals("USD", $item->getPrice()->getCurrency()->getCode());
        $this->assertEquals("67862114510011", $item->getUpc());
        $this->assertEquals("004834GQ", $item->getSku());
        $this->assertEquals("Slanket", $item->getBrand());
        $this->assertEquals("Slanket", $item->getManufacturer());
        $this->assertEquals("Blankets & Throws", $item->getCategory());
        $this->assertInternalType("array", $item->getTags());
        $this->assertEquals("Texas Tea", $item->getColor());
        $this->assertEquals(6, $item->getQuantity());
    }
}
