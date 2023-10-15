<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('path.public', function(){
            return realpath(base_path().'/../public_html');
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if(Schema::hasTable('categories')){
            $categories = Category::all();
            View::Share(['categories' => $categories]);
        }
    }
}
