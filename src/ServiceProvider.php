<?php
/**
 * Description  ReachMax DSC
 *
 * @Author      liujing <liujing@addnewer.com>
 * @DateTime    2019-06-21 23:01
 * @CopyRight   Addnewer Information Technology Co.,Ltd.
 */

namespace LiteSrv\BaiduAIP;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * Class Ocr
 *
 * @author  qbhy <96qbhy@gmail.com>
 *
 * @package LiteSrv\BaiduAIP
 */
class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['image_censor'] = function (BaiduAIP $baidu) {
            return new ImageCensor($baidu);
        };

        $pimple['image_classify'] = function (BaiduAIP $baidu) {
            return new ImageClassify($baidu);
        };

        $pimple['image_search'] = function (BaiduAIP $baidu) {
            return new ImageSearch($baidu);
        };

        $pimple['body_analysis'] = function (BaiduAIP $baidu) {
            return new BodyAnalysis($baidu);
        };

        $pimple['face'] = function (BaiduAIP $baidu) {
            return new Face($baidu);
        };

        $pimple['ocr'] = function (BaiduAIP $baidu) {
            return new Ocr($baidu);
        };

        $pimple['nlp'] = function (BaiduAIP $baidu) {
            return new Nlp($baidu);
        };

        $pimple['speech'] = function (BaiduAIP $baidu) {
            return new Speech($baidu);
        };

        $pimple['kg'] = function (BaiduAIP $baidu) {
            return new Kg($baidu);
        };

        $pimple['access_token'] = function (BaiduAIP $baidu) {
            return new AccessToken($baidu);
        };
    }

}