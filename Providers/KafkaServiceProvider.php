<?php

namespace Kezungui\LaravelKafka\Providers;

use Illuminate\Support\ServiceProvider;

use Kezungui\LaravelKafka\Core\ProductProcessor;
use Kezungui\LaravelKafka\Core\ConsumerProcessor;


class KafkaServiceProvider extends ServiceProvider
{
    public function register()
    {
    	$this->app->singleton(ProductProcessor::class, function($app) {

    		echo "注册";
            return new ProductProcessor("127.0.0.1","8901");
        });
        $this->app->singleton(ConsumerProcessor::class, function($app) {

    		echo "注册";
            return new ConsumerProcessor("127.0.0.1","8901");
        });
    }

    public function boot()
    {
    }
}
