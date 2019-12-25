<?php

namespace addons\KbitCms\backend\controllers;

use Yii;
use common\components\Curd;
use common\models\base\SearchModel;
use yii\data\ActiveDataProvider;
use yii\web\HttpException;
use addons\KbitCms\common\enums\ModelEnum;
use addons\KbitCms\common\models\Column;


/**
 * ContentController
 *
 * Class ContentColumnController
 * @package addons\KbitCms\backend\controllers
 */
class ContentController extends BaseController
{

    /**
     * @var string
     */
    public $layout = "@addons/KbitCms/backend/views/layouts/addon";


    use Curd;

    /**
     * @var ContentColumn
     */
    public $modelClass = Column::class;


    /**
     * 首页
     *
     * @return string
     * @throws \yii\web\NotFoundHttpException
     */
    public function actionIndex()
    {

        $query = Column::find()
            ->orderBy('sort asc,id asc');
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => false
        ]);


        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * 编辑/创建
     *
     * @return mixed
     */
    public function actionEdit()
    {
        $id = Yii::$app->request->get('id', null);
        $parent_id = Yii::$app->request->get('parent_id', 0);

        $model = $this->findModel($id);
        if($parent_id) {
            $model->parent_id = $parent_id;
        }
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        }

        return $this->render($this->action->id, [
            'model' => $model,
        ]);
    }

    /**
     * 返回模型
     *
     * @param $id
     * @return \yii\db\ActiveRecord
     */
    protected function findModel($id)
    {
        /* @var $model \yii\db\ActiveRecord */
        if (empty($id) || empty(($model = $this->modelClass::find()->where(['id' => $id])->one()))) {
            $model = new $this->modelClass;
            return $model->loadDefaultValues();
        }

        return $model;
    }







    public function actionModel($id)
    {
        if (empty($id) || empty(($model = $this->modelClass::find()->where(['id' => $id])->one()))) {
            throw new HttpException('400','该模型内容不存在');
        }

        switch ($model->model_type){
            case ModelEnum::MODEL_SINGLE:
                $url = ['single/edit','column_id' => $id];
                break;
            case ModelEnum::MODEL_ARTICLE:
                $url = ['article/index','column_id' => $id];
                break;
            case ModelEnum::MODEL_PRODUCT:
                $url = ['product/index','column_id' => $id];
                break;
            case ModelEnum::MODEL_ALBUM:
                $url = ['album/index','column_id' => $id];
                break;
            case ModelEnum::MODEL_DOWNLOAD:
                $url = ['download/index','column_id' => $id];
                break;
            case ModelEnum::MODEL_JOB:
                $url = ['job/index','column_id' => $id];
                break;
            case ModelEnum::MODEL_GUEST_BOOK:
                $url = ['guest-book/index','column_id' => $id];
                break;
        }

        return $this->redirect($url);

    }


}
