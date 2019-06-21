<?php
/**
 * Description  ReachMax DSC
 *
 * @Author      liujing <liujing@addnewer.com>
 * @DateTime    2019-06-21 23:01
 * @CopyRight   Addnewer Information Technology Co.,Ltd.
 */

namespace LiteSrv\BaiduAIP;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Illuminate\Foundation\Application as LaravelApplication;
use Laravel\Lumen\Application as LumenApplication;

/**
 * Class LaravelServiceProvider
 *
 * @author  qbhy <96qbhy@gmail.com>
 *
 * @package LiteSrv\BaiduAIP
 */
class LaravelServiceProvider extends BaseServiceProvider
{
    public function boot()
    {

    }

    /**
     * Setup the config.
     */
    protected function setupConfig()
    {
        $source = realpath(__DIR__ . '/../config/baidu_aip.php');
        if ($this->app->runningInConsole()) {
            $this->publishes([$source => base_path('config/baidu_aip.php')], 'baidu_aip');
        }

        if ($this->app instanceof LumenApplication) {
            $this->app->configure('baidu_aip');
        }

        $this->mergeConfigFrom($source, 'baidu_aip');
    }

    public function register()
    {
        $this->setupConfig();

        $this->app->singleton(BaiduAIP::class, function ($app) {
            return new BaiduAIP(config('baidu_aip'));
        });

        $this->app->alias(BaiduAIP::class, 'baidu_aip');
    }
}