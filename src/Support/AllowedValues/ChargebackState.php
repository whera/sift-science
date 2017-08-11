<?php

namespace WSW\SiftScience\Support\AllowedValues;

/**
 * Class ChargebackState
 *
 * @package WSW\SiftScience\Support\AllowedValues
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
abstract class ChargebackState extends BaseAllowedValues
{

    /**
     * @var string
     */
    const RECEIVED = '$received';

    /**
     * @var string
     */
    const ACCEPTED = '$accepted';

    /**
     * @var string
     */
    const DISPUTED = '$disputed';

    /**
     * @var string
     */
    const WON = '$won';

    /**
     * @var string
     */
    const LOST = '$lost';
}
