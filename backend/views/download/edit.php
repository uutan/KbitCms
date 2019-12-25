<?php

use common\helpers\Html;
use yii\widgets\ActiveForm;
use common\widgets\webuploader\Files;

/* @var $this yii\web\View */
/* @var $model addons\KbitCms\common\models\Download */
/* @var $form yii\widgets\ActiveForm */

$this->title = $column->name;
$this->params['breadcrumbs'][] = ['label' => $column->name, 'url' => ['index','column_id' => $column->id]];
$this->params['breadcrumbs'][] = '编辑';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">基本信息</h3>
            </div>
            <div class="box-body">
                <?php $form = ActiveForm::begin([
                    'fieldConfig' => [
                        'template' => "<div class='col-sm-2 text-right'>{label}</div><div class='col-sm-10'>{input}\n{hint}\n{error}</div>",
                    ],
                ]); ?>
                <div class="col-sm-12">
                    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'image')->widget(Files::class, [
                        'config' => [
                            // 可设置自己的上传地址, 不设置则默认地址
                            // 'server' => '',
                            'pick' => [
                                'multiple' => false,
                            ],
                        ]
                    ]); ?>
                    <?= $form->field($model, 'sort')->textInput() ?>
                    <?= $form->field($model, 'remark')->textarea(['rows' => 6]) ?>
                    <?= $form->field($model, 'content')->widget(\common\widgets\ueditor\UEditor::class) ?>

                    <?= $form->field($model, 'is_password')->radioList(\common\enums\StatusEnum::getMap()) ?>
                    <?= $form->field($model, 'password')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'file')->widget(\common\widgets\webuploader\Files::class, [
                            'type' => 'files',
                            'theme' => 'default',
                            'themeConfig' => [],
                            'config' => [
                                // 可设置自己的上传地址, 不设置则默认地址
                                // 'server' => '',
                                'pick' => [
                                    'multiple' => false,
                                ],
                            ]
                    ]); ?>

                    <?= $form->field($model, 'status')->dropDownList(\common\enums\StatusEnum::getMap()) ?>
                </div>
                <div class="form-group">
                    <div class="col-sm-12 text-center">
                        <button class="btn btn-primary" type="submit">保存</button>
                        <span class="btn btn-white" onclick="history.go(-1)">返回</span>
                    </div>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
