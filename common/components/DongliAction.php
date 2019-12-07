<?php
namespace addons\KbitCms\common\components;

use addons\KbitCms\common\enums\ModelEnum;
use addons\KbitCms\common\models\Single;
use common\enums\StatusEnum;
use common\helpers\ArrayHelper;
use addons\KbitCms\common\models\Column;
use common\models\base\SearchModel;
use Yii;
use yii\base\Model;
use common\helpers\Url;


trait DongliAction
{


    /**
     * 获取所有对外显示的栏目
     *
     * @return array
     */
    public function getMenus()
    {
        $data = Column::find()->where([
            'status' => StatusEnum::ENABLED,
            'is_nav' => StatusEnum::ENABLED
        ]);

        $models = $data->orderBy('parent_id asc, sort asc')
            ->asArray()
            ->all();

        foreach ($models as $key => &$model) {
            $model['fullUrl'] = Url::to(['default/dongli','menu' => $model['menu_name']]);
        }

        return ArrayHelper::itemsMerge($models,0, 'id','parent_id');
    }



    /**
     * 获取指定栏目内容
     *
     * @param $menu 菜单
     * @return array|null|\yii\db\ActiveRecord
     */
    public function getColumnModel($menu)
    {
        $model = Column::find()
            ->where([
                'menu_name' => $menu,
                'status' => StatusEnum::ENABLED
            ])
            ->andFilterWhere(['merchant_id' => $this->getMerchantId()])
            ->one();

        return $model;
    }


    /**
     * 获取单模型数据
     *
     * @param $menu
     * @return array
     * @throws \Exception
     */
    public function single($menu)
    {
        $data = [];

        $column = $this->getColumnModel($menu);

        if (!$column) {
            throw new \Exception('该栏目内容不存在');
        }
        $data['column'] = $column;

        $model = Single::find()
            ->where([
                'column_id' => $column->id,
                'status' => StatusEnum::ENABLED
            ])
            ->andFilterWhere(['merchant_id' => $this->getMerchantId()])
            ->one();

        if( $model === false ){
            $model = new Single();
        }

        $data['single'] = $model;

        return $data;
    }



    public function article($menu)
    {
        $column = $this->getColumnModel($menu);

        $data['column'] = $column;

        $modelClass = 'addons\KbitCms\common\models\\'.ModelEnum::getModelName()[$column->model_type];

        $searchModel = new SearchModel([
            'model' => $modelClass,
            'scenario' => 'default',
            'partialMatchAttributes' => ['name', 'url'], // 模糊查询
            'defaultOrder' => [
                'sort' => SORT_ASC,
                'id' => SORT_DESC,
            ],
            'pageSize' => $this->pageSize,
        ]);

        $dataProvider = $searchModel
            ->search(Yii::$app->request->queryParams);

        $dataProvider->query
            ->where(['column_id' => $column->id])
            ->andWhere(['>=', 'status', StatusEnum::DISABLED]);


        $data['dataProvider'] = $dataProvider;
        $data['searchModel'] = $searchModel;

        return $data;
    }




}