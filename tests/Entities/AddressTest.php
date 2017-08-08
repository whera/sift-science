<?php

namespace WSW\SiftScience\Entities;

use WSW\SiftScience\TestCase;

/**
 * Class AddressTest
 *
 * @package WSW\SiftScience\Entities
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class AddressTest extends TestCase
{
    /**
     * @return Address
     */
    public function instanceAddress()
    {
        $address = new Address();
        $address->setName("Bill Jones");
        $address->setPhone("1-415-555-6041");
        $address->setAddress1("2100 Main Street");
        $address->setAddress2("Apt 3B");
        $address->setCity("New London");
        $address->setRegion("New Hampshire");
        $address->setCountry("US");
        $address->setZipcode("03257");

        return $address;
    }

    /**
     * @test
     */
    public function shouldConfigureTheAttributes()
    {
        $address = $this->instanceAddress();

        $this->assertAttributeEquals("Bill Jones", "name", $address);
        $this->assertAttributeEquals("1-415-555-6041", "phone", $address);
        $this->assertAttributeEquals("2100 Main Street", "address1", $address);
        $this->assertAttributeEquals("Apt 3B", "address2", $address);
        $this->assertAttributeEquals("New London", "city", $address);
        $this->assertAttributeEquals("New Hampshire", "region", $address);
        $this->assertAttributeEquals("US", "country", $address);
        $this->assertAttributeEquals("03257", "zipcode", $address);
    }

    /**
     * @test
     */
    public function methodsGet()
    {
        $address = $this->instanceAddress();

        $this->assertEquals("Bill Jones", $address->getName());
        $this->assertEquals("1-415-555-6041", $address->getPhone());
        $this->assertEquals("2100 Main Street", $address->getAddress1());
        $this->assertEquals("Apt 3B", $address->getAddress2());
        $this->assertEquals("New London", $address->getCity());
        $this->assertEquals("New Hampshire", $address->getRegion());
        $this->assertEquals("US", $address->getCountry());
        $this->assertEquals("03257", $address->getZipcode());
    }
}
