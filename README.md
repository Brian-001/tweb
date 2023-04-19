<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


# Laravel authentication starter kits
## Fortify
Laravel Fortify is a frontend agnostic authentication backend implementation for Laravel. 

**Laravel fortify does not include user interface**. 

This allows you to still quickly scaffold the backend implementation of your application's authentication layer without being tied to any particular frontend opinions.

Fortify registers the routes and controllers needed to implement all of Laravel's authentication features, including login, registration, password reset, email verification, and more

**It is not a must to use Fortify in order to use Laravel's authentication features**

## Laravel Breeze
Laravel Breeze provides an authentication scaffolding for your application that includes a user interface built with Tailwind CSS
### Difference between Laravel Breeze and Fortify
Unlike Fortify, Breeze publishes its routes and controllers directly into your application. This allows you to study and get comfortable with Laravel's authentication features before allowing Laravel Fortify to implement these features for you.

### Difference between laravel Sanctum and Breeze
Laravel Sanctum is only concerned with managing API tokens and authenticating existing users using session cookies or tokens. Sanctum does not provide any routes that handle user registration, password reset, etc

### SPAs
Single Page Applications

### Laravel Sanctum
It provides a featherweight authentication system for SPAs, mobile applications, and simple token based
APIs.

#### Sanctum
Sanctum allows each userof your application to generate multiple API tokens for their account

## Customizing Password
Customizing password resets can be done in

App\Actions\ResetUserPassword

This is done if you have installed Laravel Fortify


