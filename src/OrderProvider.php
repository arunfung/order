<?php

namespace Bus\Service\Order;

use Bus\Service\Order\Module\Order;
use Bus\Service\Order\Module\User;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class OrderProvider extends ServiceProvider implements DeferrableProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app->singleton('order', function () {
            return new Application();
        });
    }
    /**
     * 获取由提供者提供的服务。
     *
     * @return array
     */
    public function provides()
    {
        return ['order'];
    }
}