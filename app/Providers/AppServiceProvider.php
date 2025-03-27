<?php

namespace App\Providers;

use App\Patterns\behavioral\strategy\QueueStrategy\QueueStrategyInterface;
use App\Patterns\behavioral\strategy\QueueStrategy\RedisQueueStrategy;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //Redis
        $this->app->bind(QueueStrategyInterface::class, RedisQueueStrategy::class);

        //RabbitMQ
        //$this->app->bind(QueueStrategyInterface::class, RabbitMqQueueStrategy::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useTailwind();
    }
}
