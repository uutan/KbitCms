<?php
/**
 * Created by PhpStorm.
 * User: yangtanfang
 * Date: 2019/11/25
 * Time: 10:14
 */
namespace addons\KbitCms\backend\controllers;


use Yii;

class TemplateController extends BaseController
{

    // 模板列表
    public function actionIndex()
    {

        return $this->render($this->action->id,[]);
    }




}