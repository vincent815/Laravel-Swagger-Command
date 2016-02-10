<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MakeSwag extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:swag';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create swagger.json file in public/api/docs';

    /**
     * Path of swagger.bin is located.
     *
     * @return void
     */
    protected $pathToScan  = "/home/vagrant/Code/vue-starter-laravel-api/app";

    /**
     * Path of swagger.json will be generated.
     *
     * @return void
     */
    protected $pathToGenerate = "public/docs/";

    /**
     *
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //$this->call('./vendor/bin/swagger /home/vagrant/Code/vue-starter-laravel-api/app --output public/api/docs/', []);

        if (file_exists("vendor/zircote/swagger-php/bin/")) {
            if (file_exists("public/docs/")) {
                if (
                    file_exists("public/docs/swagger-ui.js") &&
                    file_exists("public/docs/index.html") &&
                    file_exists("public/docs/o2c.html") &&
                    file_exists("public/docs/css/") &&
                    file_exists("public/docs/fonts/") &&
                    file_exists("public/docs/images/") &&
                    file_exists("public/docs/lang/") &&
                    file_exists("public/docs/lib/")
                ) {
                    shell_exec("./vendor/bin/swagger $this->pathToScan --output $this->pathToGenerate");
                    $this->info('public/docs/swagger.json was updated!');
                }
                else {
                    $this->error('Swagger-ui not found in public/docs/, Please download the zip file in swagger-api/swagger-ui then copy all the files from dist/ and paste it in public/docs.');
                }
            } else {
                mkdir("public/docs/", 0777);
                if (
                    file_exists("public/docs/swagger-ui.js") &&
                    file_exists("public/docs/index.html") &&
                    file_exists("public/docs/o2c.html") &&
                    file_exists("public/docs/css") &&
                    file_exists("public/docs/fonts/") &&
                    file_exists("public/docs/images/") &&
                    file_exists("public/docs/lang/") &&
                    file_exists("public/docs/lib/")
                ) {
                    shell_exec("./vendor/bin/swagger $this->pathToScan --output $this->pathToGenerate");
                    $this->info('public/docs/swagger.json was updated!');
                }
                else {
                    $this->error('Swagger-ui not found in public/docs/, Please download the zip file in swagger-api/swagger-ui then copy all the files from dist/ and paste it in public/docs.');
                }
            }
        } else {
            $this->error('Swagger not installed in this project, Please download zircote/swagger-php.');
        }
    }
}
