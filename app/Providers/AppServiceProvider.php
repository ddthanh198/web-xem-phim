<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Builder;
use App\Category;
use App\Film;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Builder::macro('whereLike', function(string $attribute, string $searchTerm) {
   return $this->orWhere($attribute, 'LIKE', "%{$searchTerm}%");
});
    $category=Category::all();
    view()->share('category',$category);
    $film=Film::all();
    view()->share('filmHome',$film);

    }
}
