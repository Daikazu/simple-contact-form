# Simple Contact Form

[![Build Status](https://travis-ci.org/daikazu/simple-contact-form.svg?branch=master)](https://travis-ci.org/daikazu/simple-contact-form)
[![styleci](https://styleci.io/repos/CHANGEME/shield)](https://styleci.io/repos/CHANGEME)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/daikazu/simple-contact-form/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/daikazu/simple-contact-form/?branch=master)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/CHANGEME/mini.png)](https://insight.sensiolabs.com/projects/CHANGEME)
[![Coverage Status](https://coveralls.io/repos/github/daikazu/simple-contact-form/badge.svg?branch=master)](https://coveralls.io/github/daikazu/simple-contact-form?branch=master)

[![Packagist](https://img.shields.io/packagist/v/daikazu/simple-contact-form.svg)](https://packagist.org/packages/daikazu/simple-contact-form)
[![Packagist](https://poser.pugx.org/daikazu/simple-contact-form/d/total.svg)](https://packagist.org/packages/daikazu/simple-contact-form)
[![Packagist](https://img.shields.io/packagist/l/daikazu/simple-contact-form.svg)](https://packagist.org/packages/daikazu/simple-contact-form)

Package description: CHANGE ME

## Installation

Install via composer
```bash
composer require daikazu/simple-contact-form
```

### Register Service Provider

**Note! This and next step are optional if you use laravel>=5.5 with package
auto discovery feature.**

Add service provider to `config/app.php` in `providers` section
```php
Daikazu\SimpleContactForm\ServiceProvider::class,
```

### Register Facade

Register package facade in `config/app.php` in `aliases` section
```php
Daikazu\SimpleContactForm\Facades\SimpleContactForm::class,
```

### Publish Configuration File

```bash
php artisan vendor:publish --provider="Daikazu\SimpleContactForm\ServiceProvider" --tag="config"
```

## Usage

CHANGE ME

## Security

If you discover any security related issues, please email 
instead of using the issue tracker.

## Credits

- [](https://github.com/daikazu/simple-contact-form)
- [All contributors](https://github.com/daikazu/simple-contact-form/graphs/contributors)

This package is bootstrapped with the help of
[melihovv/laravel-package-generator](https://github.com/melihovv/laravel-package-generator).
