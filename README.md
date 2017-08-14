# Sift Science
SDK Sift Science

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/whera/sift-science/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/whera/sift-science/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/whera/sift-science/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/whera/sift-science/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/whera/sift-science/badges/build.png?b=master)](https://scrutinizer-ci.com/g/whera/sift-science/build-status/master)

## Installation
Via Composer:

```bash
composer require wsw/sift-science
```
## Usage
Create new account
```php
<?php

use InvalidArgumentException;
use WSW\Email\Email;
use WSW\SiftScience\Credentials;
use WSW\SiftScience\Exceptions\SiftScienceRequestException;
use WSW\SiftScience\Services\CreateAccountService;

try {

    $credentials = new Credentials('apiToken');

    $service = new CreateAccountService($credentials);

    $account = $service->createAccountBuilder();

    $account
        ->setUserId('billy_jones_301')
        ->setSessionId('gigtleqddo84l8cm15qe4il')
        ->setUserEmail(new Email('bill@gmail.com'))
        ->setName('Bill Jones')
        ->setPhone('1-415-555-6040');

    $service->create($account);

} catch (SiftScienceRequestException $e) {
    echo $e->getMessage();

} catch (InvalidArgumentException $e) {
    echo $e->getMessage();

}
```

## Testing
``` bash
$ composer test
```

## Security
If you discover any security related issues, please email **ronaldo@whera.com.br** instead of using the issue tracker.

## Credits
- [Ronaldo Matos Rodrigues](https://github.com/whera)

## License
The MIT License (MIT). Please see [License File](LICENSE) for more information.