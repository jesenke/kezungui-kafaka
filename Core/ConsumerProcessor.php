<?php
namespace Kezungui\LaravelKafka\Core;

use RdKafka\Conf;
use RdKafka\Consumer;
use RdKafka\TopicConf;
use Exception;



class ConsumerProcessor
{
    protected $rk;


    protected $topic;


    public function __construct($ip='127.0.0.1',$rule=1)
    {
        var_dump(static::class,func_get_args());
    }

}
