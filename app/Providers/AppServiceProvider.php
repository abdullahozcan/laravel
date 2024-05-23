<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Storage;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        $directories = Storage::disk('modules')->directories('/');
        if(count($directories)>0){
            $modules = [];
            foreach ($directories as $directory){
                $modules[] = app_path('Modules').'/'.$directory.'/migrations';
            }
            //dd($modules);
            $this->loadMigrationsFrom($modules);
        }
        // $this->loadMigrationsFrom();
    }
}
