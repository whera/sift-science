<?php

namespace WSW\SiftScience\Events;

/**
 * Class CreateAccount
 *
 * @package WSW\SiftScience\Events
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class CreateAccount extends AbstractAccount
{
    /**
     * CreateAccount constructor.
     */
    public function __construct()
    {
        parent::__construct('$create_account');
    }
}
