## Laravel Swagger Command
------
Laravel Swagger Command will create an artisan command that will execute ./vendor/bin/swagger 

## Why do you make this?
------
To be more convenient. some developers don't like typing long command line consoles (like me)

## Installation
```
Follow the steps in [Integrate Swagger into Laravel](https://www.marcoraddatz.com/en/2015/07/21/integrate-swagger-into-laravel/) by Marco Raddatz
Download this repository.
Add the file MakeSwag.php to app/Console/Commands/
Register this in Console/Kernel.php
Change path to scan in $pathToScan
Change path to generate in $pathToGenerate
```

## Notes
------
I'm using public/docs instead of public/api. Although you can change this directory in MakeSwag.php 
