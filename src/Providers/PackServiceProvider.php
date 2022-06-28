<?php

namespace Webguosai\LaravelPack\Providers;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use Webguosai\LaravelPack\Services\PackService;

class PackServiceProvider extends LaravelServiceProvider
{
    protected $root = __DIR__ . '/../../';
    protected $commands = [
        \Webguosai\LaravelPack\Console\Commands\Pack::class,
    ];
    protected $routeMiddleware = [
        'pack.vip' => \Webguosai\LaravelPack\Middleware\Vip::class,
        'pack.guest' => \Webguosai\LaravelPack\Middleware\Guest::class,
    ];
    protected $middlewareGroups = [
        'pack' => [
            'pack.vip',
            'pack.guest',
        ]
    ];

    public function boot()
    {
        // 配置文件
        $this->publishes([
            $this->root . 'config/pack.php' => config_path('pack.php'),
        ], 'config');

        // 资源文件
        $this->publishes([
            $this->root . 'public' => public_path('vendor/pack')
        ], 'public');

        // 数据库迁移
        $this->publishes([
            $this->root . 'database/migrations' => database_path('migrations'),
        ], 'migrations');

        // 模板、语言
        $this->loadViewsFrom($this->root . 'resources/views', 'pack');
        $this->loadTranslationsFrom($this->root . '/resources/lang', 'pack');
        $this->publishes([
            $this->root . 'resources/views' => resource_path('views/vendor/pack'),
            $this->root . 'resources/lang' => resource_path('lang/vendor/pack'),
//            $this->root . 'resources/views' => config('view.paths')[0] . '/vendor/pack',
        ], 'resources');

        // 路由
        $this->loadRoutesFrom($this->root . 'routes/web.php');
    }

    public function register()
    {
        // 合并配置文件
        $this->mergeConfigFrom($this->root . 'config/pack.php', 'pack');

        // 注册中间件
        $this->registerMiddleware();

        // 命令
        if ($this->app->runningInConsole()) {
            $this->commands($this->commands);
        }

        // 单例模式
        $this->app->singleton('pack', function ($app) {
            return new PackService(config('pack'));
        });
    }

    protected function registerMiddleware()
    {
        foreach ($this->routeMiddleware as $key => $middleware) {
            app('router')->aliasMiddleware($key, $middleware);
        }
        foreach ($this->middlewareGroups as $key => $middleware) {
            app('router')->middlewareGroup($key, $middleware);
        }
    }
}
