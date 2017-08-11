<?php

namespace WSW\SiftScience\Events;

/**
 * Class UpdateAccount
 *
 * @package WSW\SiftScience\Events
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class UpdateAccount extends AbstractAccount
{
    /**
     * UpdateAccount constructor.
     */
    public function __construct()
    {
        parent::__construct('$update_account');
    }
}
