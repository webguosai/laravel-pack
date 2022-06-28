<?php

namespace Webguosai\LaravelPack\Services;

class PackService
{
    protected $config = [];

    public function __construct($config)
    {
        $this->config = $config;
    }

    public function get()
    {
        // 打印配置数据
        dump($this->config);
    }

}
