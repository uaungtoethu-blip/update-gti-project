<?php

namespace App\Providers;

use App\Models\Teacher;
use App\Models\User;
use GuzzleHttp\Middleware;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
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
        Model::unguard();
        Gate::define('admin', fn($user) => $user && $user->is_admin);

Gate::define('it_teacher', fn($user) => $user && optional($user->teacher->first())->it_teacher);
Gate::define('cv_teacher', fn($user) => $user && optional($user->teacher->first())->cv_teacher);
Gate::define('mp_teacher', fn($user) => $user && optional($user->teacher->first())->mp_teacher);
Gate::define('fm_teacher', fn($user) => $user && optional($user->teacher->first())->fm_teacher);
Gate::define('ep_teacher', fn($user) => $user && optional($user->teacher->first())->ep_teacher);
Gate::define('ec_teacher', fn($user) => $user && optional($user->teacher->first())->ec_teacher);

          Paginator::useBootstrapFive();
    }
}
