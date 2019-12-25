<?php

namespace addons\KbitCms\backend\controllers;

use addons\KbitCms\common\models\Column;
use Yii;
use addons\KbitCms\common\models\GuestBook;
use common\components\Curd;
use common\models\base\SearchModel;
use yii\web\Controller;

/**
* GuestBook
*
* Class GuestBookController
* @package addons\KbitCms\backend\controllers
*/
class GuestBookController extends BaseController
{
    use Curd;
    /**
     * @var string
     */
    public $layout = "@addons/KbitCms/backend/views/layouts/addon";
    /**
    * @var GuestBook
    */
    public $modelClass = GuestBook::class;



    /**
     * 首页
     *
     * @return string
     * @throws \yii\web\NotFoundHttpException
     */
    public function actionIndex($column_id)
    {
        $column = Column::find()
            ->where([
                'id' => $column_id
            ])
            ->andFilterWhere(['merchant_id' => $this->getMerchantId()])
            ->one();


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

        $dataProvider->query
            ->andWhere(['column_id' => $column_id])
            ->andFilterWhere(['merchant_id' => $this->getMerchantId()]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
            'column' => $column,
        ]);
    }


    /**
     * 编辑/创建
     *
     * @return mixed
     */
    public function actionEdit($column_id)
    {
        $column = Column::find()
            ->where([
                'id' => $column_id
            ])
            ->andFilterWhere(['merchant_id' => $this->getMerchantId()])
            ->one();

        $id = Yii::$app->request->get('id', null);
        $model = $this->findModel($id);
        $model->column_id = $column_id;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index','column_id' => $column_id]);
        }

        return $this->render($this->action->id, [
            'model' => $model,
            'column' => $column,
        ]);
    }


    /**
     * 删除
     *
     * @param $id
     * @param $column_id
     * @return mixed
     */
    public function actionDelete($id,$column_id)
    {
        if ($this->findModel($id)->delete()) {
            return $this->message("删除成功", $this->redirect(['index','column_id' => $column_id]));
        }

        return $this->message("删除失败", $this->redirect(['index','column_id' => $column_id]), 'error');
    }
}
