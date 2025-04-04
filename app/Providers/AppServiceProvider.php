<?php

namespace App\Providers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

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
/*
        //разрешить все действия админу
        Gate::before (function (User $user, string $ability) {
            //     if($user->role===3 && $ability!='update-post') {
            if($user->role===3) {
                return true;
            }
                return null;
        });


        Gate::define ('create-post',function (User $user) {
            //2 и 3 это уровни юзера из таблицы users
            return in_array ($user->role,[2,3]);
        });

        Gate::define ('update-post',function (User $user,Post $post) {
            //2 и 3 это уровни юзера из таблицы users
           // return $user->id === $post->user_id;
            return $user->id === $post->user_id || $user->role === 3  || $user->role === 2;
        });

        Gate::define ('delete-post',function (User $user,Post $post) {
            //2 и 3 это уровни юзера из таблицы users
            // return $user->id === $post->user_id;
            //если только админ может удалять статьи то   return $user->role === 3;
            return $user->id === $post->user_id || $user->role === 3  || $user->role === 2;
        });

        */


    }
}
