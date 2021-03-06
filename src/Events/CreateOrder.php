<?php

namespace WSW\SiftScience\Events;

/**
 * Class CreateOrder
 *
 * @package WSW\SiftScience\Events
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class CreateOrder extends AbstractOrder
{
    public function __construct()
    {
        parent::__construct('$create_order');
    }
}
