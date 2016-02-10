## Laravel Swagger Command
------
Laravel Swagger Command will create an artisan command that will execute ./vendor/bin/swagger 

## Why did I make this?
------
To be more convenient. Some developers don't like typing long command line consoles (like me)
From : ./vendor/bin/swagger /home/vagrant/Code/vue-starter-laravel-api/app --output public/api/docs/
To : php artisan make:swag

## Installation

1. Follow the steps in [Integrate Swagger into Laravel](https://www.marcoraddatz.com/en/2015/07/21/integrate-swagger-into-laravel/) by Marco Raddatz
2. Download this repository.
3. Add the file MakeSwag.php to app/Console/Commands/
4. Register this in Console/Kernel.php **Commands\MakeSwag::class**
5. Change path to scan in $pathToScan
6. Change path to generate in $pathToGenerate
7. Run **php artisan make:swag**

## Take Note
------
I'm using public/docs instead of public/api. Although you can change this in MakeSwag.php
