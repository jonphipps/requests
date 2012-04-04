# Requests for PHP Bundle

Requests for PHP is a humble HTTP request library. It simplifies how you interact with other sites and takes away all your worries.

For documentation and examples [see the Requests site](http://requests.ryanmccue.info/).

## Installation

```bash
php artisan bundle:install requests
```

## Bundle Registration

Add the following to your **application/bundles.php** file:

```php
'requests' => array(
        'auto' => true
    ),
),
```