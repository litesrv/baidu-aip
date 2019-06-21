<?php
/**
 * Description  ReachMax DSC
 *
 * @Author      liujing <liujing@addnewer.com>
 * @DateTime    2019-06-21 23:01
 * @CopyRight   Addnewer Information Technology Co.,Ltd.
 */

return [
    'use'          => 'default',
    'debug'        => env('BAIDU_AIP_DEBUG', false),
    'applications' => [
        'default' => [
            'app_id'     => env('BAIDU_AIP_APP_ID'),
            'api_key'    => env('BAIDU_AIP_API_KEY'),
            'secret_key' => env('BAIDU_AIP_SECRET_KEY'),
        ],
        'speech'  => [
            'app_id'     => env('BAIDU_AIP_SPEECH_APP_ID'),
            'api_key'    => env('BAIDU_AIP_SPEECH_API_KEY'),
            'secret_key' => env('BAIDU_AIP_SPEECH_SECRET_KEY'),
        ],
    ]
];