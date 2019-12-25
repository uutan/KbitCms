<?php
/**
 * Created by PhpStorm.
 * User: yangtanfang
 * Date: 2019/10/22
 * Time: 00:05
 */
namespace addons\KbitCms\common\enums;


use Yii;

class ModelEnum
{

    // const MODEL_LINK = 'link';
    const MODEL_ARTICLE = 'article';
    const MODEL_PRODUCT = 'product';
    const MODEL_ALBUM = 'album';
    const MODEL_SINGLE = 'single';
    const MODEL_DOWNLOAD = 'download';
    const MODEL_JOB = 'job';
    const MODEL_GUEST_BOOK = 'guest_book';


    /**
     * @return array
     */
    public static function getMap(): array
    {
        return [
            // self::MODEL_LINK => '链接',
            self::MODEL_ARTICLE => '文章',
            self::MODEL_PRODUCT => '产品',
            self::MODEL_ALBUM => '图集',
            self::MODEL_SINGLE => '单页',
            self::MODEL_DOWNLOAD => '下载',
            self::MODEL_JOB => '招聘',
            self::MODEL_GUEST_BOOK => '留言板',
        ];
    }

    public static $listExplain = [
        // self::MODEL_LINK => '链接',
        self::MODEL_ARTICLE => '文章',
        self::MODEL_PRODUCT => '产品',
        self::MODEL_ALBUM => '图集',
        self::MODEL_SINGLE => '单页',
        self::MODEL_DOWNLOAD => '下载',
        self::MODEL_JOB => '招聘',
        self::MODEL_GUEST_BOOK => '留言板',
    ];


    public static function getModelName() : array
    {
        return [
            // self::MODEL_LINK => 'Link',
            self::MODEL_ARTICLE => 'Article',
            self::MODEL_PRODUCT => 'Product',
            self::MODEL_ALBUM => 'Album',
            self::MODEL_SINGLE => 'Single',
            self::MODEL_DOWNLOAD => 'Download',
            self::MODEL_JOB => 'Job',
            self::MODEL_GUEST_BOOK => 'GuestBook',
        ];
    }


    /**
     * @var array
     */
    public static $modelAction = [
        //self::MODEL_LINK => 'link',
        self::MODEL_ARTICLE => 'article',
        self::MODEL_PRODUCT => 'product',
        self::MODEL_ALBUM => 'album',
        self::MODEL_SINGLE => 'single',
        self::MODEL_DOWNLOAD => 'download',
        self::MODEL_JOB => 'job',
        self::MODEL_GUEST_BOOK => 'guestBook',
    ];

}