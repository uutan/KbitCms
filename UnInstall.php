<?php

namespace addons\KbitCms;

use common\models\common\ConfigValue;
use yii\db\Migration;
use common\enums\AppEnum;
use common\models\common\AuthRole;
use common\models\common\AuthItemChild;
use common\helpers\MigrateHelper;
use common\interfaces\AddonWidget;
use common\models\merchant\Member;
use common\models\merchant\Merchant;

/**
 * 卸载
 *
 * Class UnInstall
 * @package addons\KbitCms
 */
class UnInstall extends Migration implements AddonWidget
{
    /**
    * @param $addon
    * @return mixed|void
    * @throws \yii\base\InvalidConfigException
    * @throws \yii\web\NotFoundHttpException
    * @throws \yii\web\UnprocessableEntityHttpException
    */
    public function run($addon)
    {

         MigrateHelper::downByPath([
             '@addons/KbitCms/console/migrations/'
         ]);
    }
}