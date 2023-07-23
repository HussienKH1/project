<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Post;
use App\Models\User;
use App\Policies\PostPolicy;
use App\Policies\Userpolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        User::class => Userpolicy::class,
        Post::class => PostPolicy::class, 
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
