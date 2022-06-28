<?php

namespace Webguosai\LaravelPack\Http\Controllers;

use Illuminate\Routing\Controller;
use Webguosai\LaravelPack\Models\Pack;

class PackController extends Controller
{
    public function index()
    {
        dump(config('pack.config'));
        dump(trans('pack::pack.name'));

        // 数据库
        dump(Pack::query()->get()->toArray());

        // 容器
        app('pack')->get();

        // 门脸
        \Webguosai\LaravelPack\Facades\Pack::get();

        // 模板
        return view('pack::index');
    }
}
