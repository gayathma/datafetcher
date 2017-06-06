<p align="center">Data Fetcher</p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Data Fetcher

Simple Air Traffic data retrieving application which uses <a href="https://opensky-network.org/apidoc/rest.html#operation">OpenSky REST API</a>. 

##  Please run following commands to set up the project ##

* type `git clone https://github.com/gayathma/datafetcher.git` to clone the repository 
* type `cd datafetcher`
* type `composer install`
* copy *.env.example* to *.env*
* type `php artisan serve` with the given url you can access the application in the browser

*** You can access the Air Traffic Data by clicking the Air Traffic Data link in the upper right corner of the Home Page.

### OR ###

* ** download as a zip file and unzip it in your folder. You can make a *composer update* to refresh vendor.

### Features ###

* Home Page
* Air Traffic Data Display Page
* Custom error pages 403, 404 and 503

![Alt text](/screenshots/sc1.png?raw=true "Home Page")

![Alt text](/screenshots/sc2.png?raw=true "Air Traffic Data Display")

### Tests ###

This project has been developed using Test Driven Development. PHPUnit is used to run the testcases. You can refer the index.html file inside /report folder to analyze code coverage statistics.

![Alt text](/screenshots/sc3.png?raw=true "Code Coverage Stats")

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
