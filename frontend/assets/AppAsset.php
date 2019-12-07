<?php

namespace addons\KbitCms\frontend\assets;

use yii\web\AssetBundle;

/**
 * 静态资源管理
 *
 * Class AppAsset
 * @package addons\RfMerchants\frontend\assets
 */
class AppAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@addons/KbitCms/frontend/resources/';

    public $css = [
        'css/site.css',
    ];

    public $js = [

    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset'
    ];


//    public $jsOptions = [
//        [
//            'options' => [
//                'condition'=> 'lt IE 9',
//            ],
//            'js'  =>[
//                'theme/js/html5shiv.min.js'
//            ],
//        ],
//    ];
}