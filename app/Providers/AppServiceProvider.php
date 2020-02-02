<?php

namespace App\Providers;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;
use Illuminate\Support\ServiceProvider;
use App\Verse;
use App\User;

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
    public function boot(Dispatcher $events)
    {
        \Schema::defaultStringLength(191);
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            $event->menu->add('VERSE');
            $event->menu->add([
                'text' => 'Стихи',
                'url' => 'admin/verses',
                'label'       => Verse::where('approved', '0')->count(),
                'label_color' => 'success',
            ]);
            $event->menu->add([
                'text' => 'Добавить стих',
                'url' => 'admin/verses/create'
            ]);


            $event->menu->add('Categories');
            $event->menu->add([
                'text' => 'Категории',
                'url' => 'admin/categories'
            ]);
            $event->menu->add([
                'text' => 'Добавить категории',
                'url' => 'admin/categories/create'
            ]);

            $event->menu->add('USERS');
            $event->menu->add([
                'text' => 'Пользователи',
                'url' => 'admin/users',
                'label'       => User::where('role', 'author')->count(),
                'label_color' => 'success',
            ]);
            $event->menu->add([
                'text' => 'Добавить пользователя',
                'url' => 'admin/users/create'
            ]);
        });
    }
}
