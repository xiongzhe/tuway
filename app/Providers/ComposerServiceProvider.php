<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts/sidebar', function ($view) {
            //共享菜单数据
            $menus = [
                [
                    'id' => 1,
                    'pid' => 0,
                    'name' => '控制台',
                    'language' => 'zh',
                    'icon' => 'fa fa-dashboard',
                    'url' => 'admin',
                    'description' => '控制台',
                    'sort' => 0,
                    'status' => 1,
                    'child' => [],
                ],
                [
                    'id' => 2,
                    'pid' => 0,
                    'name' => '错误日志',
                    'language' => 'zh',
                    'icon' => 'fa fa-dashboard',
                    'url' => 'admin/logs',
                    'description' => '错误日志',
                    'sort' => 0,
                    'status' => 1,
                    'child' => [],
                ],
                [
                    'id' => 3,
                    'pid' => 0,
                    'name' => '用户管理',
                    'language' => 'zh',
                    'icon' => 'fa fa-dashboard',
                    'url' => 'admin/user',
                    'description' => '用户管理',
                    'sort' => 0,
                    'status' => 1,
                    'child' => [],
                ],
                [
                    'id' => 4,
                    'pid' => 0,
                    'name' => '活动管理',
                    'language' => 'zh',
                    'icon' => 'fa fa-dashboard',
                    'url' => 'admin/activity',
                    'description' => '活动管理',
                    'sort' => 0,
                    'status' => 1,
                    'child' => [],
                ],
                [
                    'id' => 5,
                    'pid' => 0,
                    'name' => '运营用户管理',
                    'language' => 'zh',
                    'icon' => 'fa fa-dashboard',
                    'url' => 'admin/operate-account',
                    'description' => '运营用户管理',
                    'sort' => 0,
                    'status' => 1,
                    'child' => [],
                ]
            ];
            $view->with('menus',$menus);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
