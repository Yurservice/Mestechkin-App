# Mestechkin-App

Mestechkin-App is a Laravel library that enables you to retrieve all DNS records for a specified domain name.

## Installation

To install the app, follow these steps:

1. Add the following lines to your Laravel app's `composer.json` file:

```json
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/Yurservice/Mestechkin-App"
    }
]
```

2. Run the command `composer update` to download Mestechkin-App from GitHub. The app will be available in the `vendor/miestiechkin-app/miestiechkin-app` directory.

## Registration in Laravel

To register the app in Laravel, perform the following steps:

1. Create a new service provider by running the following command:

```
php artisan make:provider MiestiechkinAppServiceProvider
```

2. Open the file `MiestiechkinAppServiceProvider.php` and update the `register` function as follows:

```php
public function register(): void
{
    require_once base_path('vendor/miestiechkin-app/miestiechkin-app/src/coolDNSServiceClass.php');
}
```

3. Open the file `config/app.php` and add the following line to the providers array:

```php
App\Providers\MiestiechkinAppServiceProvider::class,
```

## How to Use

To use the application in your project, follow these steps:

1. Include the app by adding the following line to your `ControllerClass` or any other file:

```php
use \MiestiechkinApp\coolDNSServiceClass as coolDNSServiceClass;
```

2. You can now use the app using the example code below:

```php
$coolDNSService = new coolDNSServiceClass();
print_r($coolDNSService->getDnsRecords('google.com'));
```

## How to Test the App Class

To test the app class, follow these steps:

1. Copy the file `MainTest.php` from `vendor/miestiechkin-app/miestiechkin-app/tests` to `tests/Unit/`.

2. Open the file `tests/Unit/MainTest.php` and insert your base path into the `base_path` variable.

3. You can now run the tests by executing the command `php artisan test`.