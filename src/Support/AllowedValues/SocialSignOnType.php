<?php

namespace WSW\SiftScience\Support\AllowedValues;

/**
 * Class SocialSignOnType
 *
 * @package WSW\SiftScience\Support\AllowedValues
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
abstract class SocialSignOnType extends BaseAllowedValues
{
    /**
     * @var string
     */
    const FACEBOOK = '$facebook';

    /**
     * @var string
     */
    const GOOGLE = '$google';

    /**
     * @var string
     */
    const LINKEDIN = '$linkedin';

    /**
     * @var string
     */
    const TWITTER = '$twitter';

    /**
     * @var string
     */
    const YAHOO = '$yahoo';

    /**
     * @var string
     */
    const OTHER = '$other';
}
