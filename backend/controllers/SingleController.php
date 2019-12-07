<?php

namespace addons\KbitCms\backend\controllers;

use addons\KbitCms\common\models\Column;
use addons\KbitCms\common\models\Single;

use Yii;
use common\components\Curd;
use common\models\base\SearchModel;
use yii\web\Controller;

/**
 * ContentSingle
 *
 * Class ContentSingleController
 * @package backend\controllers
 */
class SingleController extends BaseController
{
    use Curd;
    /**
     * @var string
     */
    public $layout = "@addons/KbitCms/backend/views/layouts/addon";


    /**
     * @var ContentSingle
     */
    public $modelClass = Single::class;


    /**
     * 首页
     *
     * @return string
     * @throws \yii\web\NotFoundHttpException
     */
    public function actionIndex()
    {
        $searchModel = new SearchModel([
            'model' => $this->modelClass,
            'scenario' => 'default',
            'partialMatchAttributes' => [], // 模糊查询
            'defaultOrder' => [
                'id' => SORT_DESC
            ],
            'pageSize' => $this->pageSize
        ]);

        $dataProvider = $searchModel
            ->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
    }


    /**
     * 编辑/创建
     *
     * @return mixed
     */
    public function actionEdit($column_id)
    {
        $column = Column::findOne($column_id);

        $model = Single::find()->where(['column_id' => $column_id])->one();
        if (empty($model)) {
            $model = new $this->modelClass;
            $model->column_id = $column_id;
            $model->save(false);
        }


        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success','编辑成功');
            return $this->redirect(['edit','column_id' => $column_id]);
        }

        return $this->render($this->action->id, [
            'model' => $model,
            'column' => $column,
        ]);
    }


}
