<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        // 'webmastar'ゲートを定義
        // ユーザーIDが 1 のユーザーを管理者とする
        Gate::define('webmastar', function ($user) {
            return ($user->id == 1);
        });
        // 'editar'ゲートを定義
        // ユーザーIDが  2 のユーザーを編集者とする
        Gate::define('editor', function ($user) {
            return ($user->id == 2);
        });
    }
}
