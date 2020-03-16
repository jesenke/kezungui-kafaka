<?php

namespace Kezungui\LaravelKafka\Core;

class ProductProcessor
{
    protected $rk;


    protected $topic;



    public function __construct($ip='127.0.0.1',$rule=1)
    {
        var_dump(static::class,func_get_args());
    }
    

}


