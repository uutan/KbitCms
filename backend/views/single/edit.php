<?php

use common\helpers\Html;
use yii\widgets\ActiveForm;
use common\widgets\webuploader\Files;

/* @var $this yii\web\View */
/* @var $model common\models\ContentSingle */
/* @var $form yii\widgets\ActiveForm */

$this->title = $column->name;
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['edit','column_id' => $column->id]];
$this->params['breadcrumbs'][] = '编辑';
?>

<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"><?=$this->title;?></h3>
            </div>
            <div class="box-body">
                <?php $form = ActiveForm::begin([
                    'fieldConfig' => [
                        'template' => "<div class='col-sm-2 text-right'>{label}</div><div class='col-sm-10'>{input}\n{hint}\n{error}</div>",
                    ],
                ]); ?>
                <div class="col-sm-12">

                    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'cover')->widget(Files::class, [
                        'config' => [
                            'pick' => [
                                'multiple' => false,
                            ]
                        ]
                    ]); ?>
                    <?= $form->field($model, 'description')->textarea(); ?>
                    <?= $form->field($model, 'content')->widget(\common\widgets\ueditor\UEditor::class) ?>
                    <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'view')->textInput() ?>
                    <?= $form->field($model, 'is_new_template')->radioList(\common\enums\StatusEnum::getMap()) ?>
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
