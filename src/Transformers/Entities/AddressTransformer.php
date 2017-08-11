<?php

namespace WSW\SiftScience\Transformers\Entities;

use WSW\SiftScience\Entities\Address;
use WSW\SiftScience\Transformers\AbstractTransformer;

/**
 * Class AddressTransformer
 *
 * @package WSW\SiftScience\Transformers\Entities
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class AddressTransformer extends AbstractTransformer
{

    public function transform(Address $address)
    {
        return array_filter([
            '$name' => $address->getName(),
            '$phone' => $address->getPhone(),
            '$address_1' => $address->getAddress1(),
            '$address_2' => $address->getAddress2(),
            '$city' => $address->getCity(),
            '$region' => $address->getRegion(),
            '$country' => $address->getCountry(),
            '$zipcode' => $address->getZipcode()
        ]);
    }
}
