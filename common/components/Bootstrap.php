<?php

namespace addons\KbitCms\common\components;

use Yii;
use common\interfaces\AddonWidget;
use common\helpers\AddonHelper;
use common\enums\AppEnum;

/**
 * Bootstrap
 *
 * Class Bootstrap
 * @package addons\KbitCms\common\config
 */
class Bootstrap implements AddonWidget
{
    /**
    * @param $addon
    * @return mixed|void
    */
    public function run($addon)
    {
        // 动态注入服务
        Yii::$app->set('cmsServices', [
            'class' => 'addons\KbitCms\services\Application',
        ]);

        // 注册资源
        if (in_array(Yii::$app->id, [AppEnum::MERCHANT, AppEnum::BACKEND])) {
            AddonHelper::filePath();
        }
    }
}