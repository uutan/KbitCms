<?php
/**
 * Created by PhpStorm.
 * User: yangtanfang
 * Date: 2019/10/22
 * Time: 10:19
 */

namespace addons\KbitCms\common\widgets\menu;

use common\enums\StatusEnum;
use common\helpers\ArrayHelper;
use Yii;
use yii\base\Widget;
use addons\KbitCms\common\models\Column;

/**
 * 左边菜单
 *
 * Class MenuLeftWidget
 * @package backend\widgets\menu
 * @author jianyan74 <751393839@qq.com>
 */
class ContentLeftWidget extends Widget
{
    /**
     * @return string
     */
    public function run()
    {

        $widgets = [
            [
                'label' => '广告管理',
                'url' => ['adv/index'],
                'icon' => 'fa fa-cube',
            ],
            [
                'label' => '友链管理',
                'url' => ['link/index'],
                'icon' => 'fa fa-cube',
            ],
        ];



        return $this->render('content-left', [
            'menus' => $this->getList(),
            'widgets' => $widgets,
        ]);
    }


    /**
     * @return array
     */
    public function getList()
    {
        $data = Column::find()->where(['status' => StatusEnum::ENABLED]);

        $models = $data->orderBy('parent_id asc, sort asc')
            ->asArray()
            ->all();

        foreach ($models as $key => &$model) {
            $model['fullUrl'] = ['content/model','id' => $model['id']];
            $model['icon'] = 'fa-circle-o';
        }


        return ArrayHelper::itemsMerge($models,0, 'id','parent_id');
    }


}