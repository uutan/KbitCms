<?php

use yii\widgets\ActiveForm;
use common\helpers\Url;
use addons\KbitCms\common\models\Column;
use addons\KbitCms\common\enums\ModelEnum;
use common\widgets\webuploader\Files;
use common\enums\WhetherEnum;

$form = ActiveForm::begin([
    'id' => $model->formName(),
    'enableAjaxValidation' => true,
    'class' => 'form-horizontal',
    'validationUrl' => Url::to(['ajax-edit', 'id' => $model['id']]),
    'fieldConfig' => [
        //'template' => "<div class='col-sm-2 text-right'>{label}</div><div class='col-sm-10'>{input}\n{hint}\n{error}</div>",
    ]
]);
?>

    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4 class="modal-title">基本信息</h4>
        </div>
        <div class="modal-body">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'menu_name')->textInput(['maxlength' => true])->hint("要求全局唯一，且只能为小写字母,数字和'-'组合。"); ?>

            <div class="row">
                <div class="col-sm-6">
                    <?= $form->field($model, 'model_type')->dropDownList(ModelEnum::getMap()) ?>
                </div>
                <div class="col-sm-6">
                    <?= $form->field($model, 'is_comment')->dropDownList(WhetherEnum::getMap()) ?>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-6"><?= $form->field($model, 'is_nav')->dropDownList(WhetherEnum::getMap()) ?></div>
                <div class="col-sm-6"><?= $form->field($model, 'is_blank')->dropDownList(WhetherEnum::getMap()) ?></div>
            </div>

            <div class="row">
                <div class="col-sm-6"><?= $form->field($model, 'status')->dropDownList(\common\enums\StatusEnum::getMap()) ?></div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-white" data-dismiss="modal">关闭</button>
            <button class="btn btn-primary" type="submit">保存</button>
        </div>
    </div>

<?php ActiveForm::end(); ?>