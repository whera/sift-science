<?php

namespace WSW\SiftScience\Events;

/**
 * Class UpdateOrder
 *
 * @package WSW\SiftScience\Events
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class UpdateOrder extends AbstractOrder
{
    public function __construct()
    {
        parent::__construct('$update_order');
    }
}
