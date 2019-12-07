<?php

namespace addons\KbitCms\frontend\controllers;

use addons\KbitCms\common\enums\ModelEnum;
use addons\KbitCms\common\models\Article;
use addons\KbitCms\common\models\Column;
use addons\KbitCms\common\models\Single;
use common\enums\StatusEnum;
use Yii;
use common\controllers\AddonsController;
use yii\base\ErrorException;
use yii\base\Exception;

/**
 * 默认控制器
 *
 * Class DefaultController
 * @package addons\KbitCms\frontend\controllers
 */
class DefaultController extends BaseController
{

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }



    /**
    * 首页
    *
    * @return string
    */
    public function actionIndex()
    {
        return $this->render('index',[

        ]);
    }


    /**
     * 处理所有CMS的模板
     *
     * @param $menu
     * @return string|\yii\console\Response|\yii\web\Response
     * @throws Exception
     */
    public function actionDongli($menu)
    {
        try {

            $model = $this->getColumnModel($menu);

            // 栏目定制模板
            $thatViewName = $this->viewPath . DIRECTORY_SEPARATOR . $model->model_type . DIRECTORY_SEPARATOR . $model->model_type . '-' . $model->id;

            // 栏目默认模板
            $defaultViewName = 'template'.DIRECTORY_SEPARATOR.$model->model_type;
            if (file_exists($thatViewName)) {
                $viewName = $thatViewName;
            } else {
                $viewName = $defaultViewName;
            }

            // 实现各功能
            $actionName = ModelEnum::$modelAction[$model->model_type];


            $data = $this->{$actionName}($menu);

            return $this->render($viewName, $data);

        } catch (ErrorException $e){
            return $this->error($e->getMessage());
        }
    }


    /**
     * 文章详情
     *
     * @param $id
     * @return string
     */
    public function actionArticle($id)
    {

        $model = Article::find()->where([
            'id' => $id,
            'status' => StatusEnum::ENABLED
        ])->one();


        $data['article'] = $model;

        


        return $this->render('template'.DIRECTORY_SEPARATOR.'article_view',$data);
    }







}