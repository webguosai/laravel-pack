<h1 align="center">laravel扩展包演示</h1>

<p align="center">
<a href="https://packagist.org/packages/webguosai/laral-pack"><img src="https://poser.pugx.org/webguosai/laral-pack/v/stable" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/webguosai/laral-pack"><img src="https://poser.pugx.org/webguosai/laral-pack/downloads" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/webguosai/laral-pack"><img src="https://poser.pugx.org/webguosai/laral-pack/v/unstable" alt="Latest Unstable Version"></a>
<a href="https://packagist.org/packages/webguosai/laral-pack"><img src="https://poser.pugx.org/webguosai/laral-pack/license" alt="License"></a>
</p>


## 运行环境

- php >= 7.2
- laravel >= 7.24

## 安装

首先确保安装好了laravel，并且数据库连接设置正确

```Shell
composer require webguosai/laral-pack
```

然后运行下面的命令来发布资源：

```shell
php artisan vendor:publish --provider="Webguosai\LaravelPack\Providers\PackServiceProvider"
```

执行迁移

```shell
php artisan migrate
```

## License

MIT

