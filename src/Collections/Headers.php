<?php

namespace WSW\SiftScience\Collections;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class Headers
 *
 * @package WSW\SiftScience\Collections
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class Headers extends ArrayCollection
{
    public function __construct()
    {
        parent::__construct([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'
        ]);
    }
}
