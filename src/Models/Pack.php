<?php

namespace Webguosai\LaravelPack\Models;

use Illuminate\Database\Eloquent\Model;

class Pack extends Model
{
    //表名
    protected $table = 'pack';
    //指定允许批量赋值的字段
    protected $fillable = [
        'name'
    ];
    //自动维护时间戳
    public $timestamps = false;
}
