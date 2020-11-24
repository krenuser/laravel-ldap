[![Latest Stable Version](https://img.shields.io/packagist/v/krenor/ldap-auth.svg?style=flat-square)](https://packagist.org/packages/krenor/ldap-auth)
[![License](https://img.shields.io/packagist/l/krenor/ldap-auth.svg?style=flat-square)](https://packagist.org/packages/krenor/ldap-auth)

# ldap-auth

Very basic **READ ONLY** LDAP authentication driver for [Laravel 6.x+](http://laravel.com/)  

Based on [Krenor's](https://github.com/krenor/) [ldap-auth](https://github.com/krenor/ldap-auth) repository.

Tested with Laravel v7.29.

## Installation

### Step 1: Install Through Composer

Add to your root composer.json and install with `composer install` or `composer update`

    {
      require: {
        "krenuser/ldap-auth": "*"
      }
    }

or use `composer require krenuser/ldap-auth` in your console.

You can use VCS Repositories option to install this package:

    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/krenuser/ldap-auth"
        }
    ],
    "require": {
        "krenuser/ldap-auth": "*"
    }

### Step 2: Add the Service Provider

Modify your `config/app.php` file and add the service provider to the providers array.

    KrenUser\LdapAuth\LdapAuthServiceProvider::class,
    
### Step 3: Publish the configuration file by running:

`php artisan vendor:publish`  

Now you're all set!

## Configuration

### Step 1: Tweak the basic authentication


Update your `config/auth.php` to use **ldap** as authentication and the **LdapUser** Class.

```php
'guards' => [
  	'web' => [
  		'driver'   => 'session',
  		'provider' => 'ldap-users',
	],
],

'providers' => [
	'users'      => [
		'driver' => 'eloquent',
		'model'  => App\User::class,
	],

	'ldap-users' => [
		'driver' => 'ldap',
		'model'  => \KrenUser\LdapAuth\Objects\LdapUser::class,
	],
]
```


### Step 2: Adjust the LDAP config to your needs

If you have run `php artisan vendor:publish` you should see the  
ldap.php file in your config directory. Adjust the values as you need them.

## Usage

### Authentication
Look up here for an [Example](https://github.com/krenor/ldap-auth/blob/master/EXAMPLE.md) or
Look up here for all [Guard methods](https://github.com/neoascetic/laravel-framework/blob/master/src/Illuminate/Auth/Guard.php) using `$this->auth`.


## Contributing

### Pull Requests

- **[PSR-2 Coding Standard](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md)**

- **Add tests** - Your patch won't be accepted if it doesn't have tests.

- **Document any changes** - Make sure the `README.md` and any other relevant documentation are kept up-to-date.

- **Create feature branches** - Use `git checkout -b my-new-feature`

- **One pull request per feature** - If you want to do more than one thing, send multiple pull requests.

- **Send coherent history** - Make sure each individual commit in your pull request is meaningful. If you had to make multiple intermediate commits while developing, please [squash them](http://www.git-scm.com/book/en/v2/Git-Tools-Rewriting-History#Changing-Multiple-Commit-Messages) before submitting.


## Licence

ldap-auth is distributed under the terms of the [MIT license](https://github.com/krenor/ldap-auth/blob/master/LICENSE.md)
