<?php

namespace KrenUser\LdapAuth\Exceptions;

use Exception;

class MissingConfigurationException extends Exception
{

    public function __construct()
    {
        parent::__construct('Please ensure that a ldap.php file is present in the config directory. 
            Try re-publishing using `php artisan vendor:publish --tag="ldap"`.');
    }

}