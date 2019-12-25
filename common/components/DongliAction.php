<?php
namespace addons\KbitCms\common\components;

use Yii;
use common\enums\StatusEnum;
use common\helpers\ArrayHelper;
use common\models\base\SearchModel;
use common\helpers\Url;
use addons\KbitCms\common\enums\ModelEnum;
use addons\KbitCms\common\models\Article;
use addons\KbitCms\common\models\Product;
use addons\KbitCms\common\models\Album;
use addons\KbitCms\common\models\Job;
use addons\KbitCms\common\models\Download;
use addons\KbitCms\common\models\GuestBook;
use addons\KbitCms\common\models\Single;
use addons\KbitCms\common\models\Column;



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
            $model['menu'] = $model['menu_name'];
            $model['fullUrl'] = Url::to(['site/dongli','menu' => $model['menu_name']]);
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
            //->andFilterWhere(['merchant_id' => $this->getMerchantId()])
            ->one();

        return $model;
    }

    public function getColumnModelID($id)
    {
        $model = Column::find()
            ->where([
                'id' => $id,
                'status' => StatusEnum::ENABLED
            ])
            //->andFilterWhere(['merchant_id' => $this->getMerchantId()])
            ->one();

        return $model;
    }


    /**
     * 获取文章列表数据
     *
     * @param $column_id
     * @param int $limit
     * @param array $where
     * @return array|\yii\db\ActiveRecord[]
     */
    public function getArticleList($column_id, $limit = 10, $where = [])
    {
        $model = Article::find()->where([
            'status' => StatusEnum::ENABLED,
            'column_id' => $column_id,
        ]);

        if( $where ){
            $model->andWhere($where);
        }

        return $model->orderBy(['id' => SORT_DESC])->limit($limit)->asArray()->all();
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
            //->andFilterWhere(['merchant_id' => $this->getMerchantId()])
            ->one();

        if( $model === false ){
            $model = new Single();
        }

        $data['single'] = $model;

        return $data;
    }


    /**
     * 获取文章列表
     *
     * @param $menu
     * @return mixed
     */
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


    /**
     * 产品
     *
     * @param $menu
     * @return mixed
     */
    public function product($menu)
    {
        $column = $this->getColumnModel($menu);

        $data['column'] = $column;

        $modelClass = 'addons\KbitCms\common\models\\'.ModelEnum::getModelName()[$column->model_type];

        $searchModel = new SearchModel([
            'model' => $modelClass,
            'scenario' => 'default',
            'partialMatchAttributes' => ['name'], // 模糊查询
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



    /**
     * 图集
     *
     * @param $menu
     * @return mixed
     */
    public function album($menu)
    {
        $column = $this->getColumnModel($menu);

        $data['column'] = $column;

        $modelClass = 'addons\KbitCms\common\models\\'.ModelEnum::getModelName()[$column->model_type];

        $searchModel = new SearchModel([
            'model' => $modelClass,
            'scenario' => 'default',
            'partialMatchAttributes' => ['name'], // 模糊查询
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


    /**
     * 下载
     *
     * @param $menu
     * @return mixed
     */
    public function download($menu)
    {
        $column = $this->getColumnModel($menu);

        $data['column'] = $column;

        $modelClass = 'addons\KbitCms\common\models\\'.ModelEnum::getModelName()[$column->model_type];

        $searchModel = new SearchModel([
            'model' => $modelClass,
            'scenario' => 'default',
            'partialMatchAttributes' => ['name'], // 模糊查询
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

    /**
     * 招聘
     *
     * @param $menu
     * @return mixed
     */
    public function job($menu)
    {
        $column = $this->getColumnModel($menu);

        $data['column'] = $column;

        $modelClass = 'addons\KbitCms\common\models\\'.ModelEnum::getModelName()[$column->model_type];

        $searchModel = new SearchModel([
            'model' => $modelClass,
            'scenario' => 'default',
            'partialMatchAttributes' => ['name'], // 模糊查询
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

    /**
     * 留言
     *
     * @param $menu
     * @return mixed
     */
    public function guestBook($menu)
    {
        $column = $this->getColumnModel($menu);

        $data['column'] = $column;

        $modelClass = 'addons\KbitCms\common\models\\'.ModelEnum::getModelName()[$column->model_type];

        $searchModel = new SearchModel([
            'model' => $modelClass,
            'scenario' => 'default',
            'partialMatchAttributes' => ['name'], // 模糊查询
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