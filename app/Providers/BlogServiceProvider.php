<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class BlogServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->topMenu();
        $this->home();
    }

    //Top menu

    public function topMenu()
    {
        View::composer('layouts.header', function($view){
            $view->with('categories', \App\Category::where('parent_id', 0)->where('published', 1)->get());
        });
    }

    //Прописать тут для отображения всех статей на странице, без этого переменная несущественна

    public function home()
    {
        View::composer('blog.home', function($view){
            $view->with('articles', \App\Article::orderBy('created_at', 'desc')->where('published', 1)->paginate(10)); //Не включать метод get() ввиду отсутствия необходимости аргумента
        });
    }
}
