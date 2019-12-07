<?php
use addons\KbitCms\common\models\Column;
use addons\KbitCms\common\enums\ModelEnum;
use yii\widgets\ActiveForm;
use common\widgets\webuploader\Files;
use common\enums\WhetherEnum;


/* @var $this yii\web\View */
/* @var $model addons\KbitCms\common\models\Column */
/* @var $form yii\widgets\ActiveForm */

$this->title = '编辑';
$this->params['breadcrumbs'][] = ['label' => '栏目管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?php $form = ActiveForm::begin([
    'fieldConfig' => [
        'template' => "<div class='col-sm-2 text-right'>{label}</div><div class='col-sm-10'>{input}\n{hint}\n{error}</div>",
    ],
]); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">基本信息</h3>
                <div class="pull-right">
                    <button class="btn btn-primary" type="submit">保存</button>
                    <span class="btn btn-white" onclick="history.go(-1)">返回</span>
                </div>
            </div>
            <div class="box-body">

                <div class="col-sm-12">
                    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'parent_id')->dropDownList(Column::getDropDownList($model->id)) ?>
                    <?= $form->field($model, 'model_type')->dropDownList(ModelEnum::getMap()) ?>
                    <?= $form->field($model, 'name_remark')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'menu_name')->textInput(['maxlength' => true])->hint("要求全局唯一，且只能为小写字母,数字和'-'组合。"); ?>
                    <?= $form->field($model, 'sort')->textInput()->hint('按数值从小到大排序') ?>
                    <?= $form->field($model, 'image')->widget(Files::class, [
                        'config' => [
                            // 可设置自己的上传地址, 不设置则默认地址
                            // 'server' => '',
                            'pick' => [
                                'multiple' => false,
                            ],
                        ]
                    ]); ?>
                    <?= $form->field($model, 'url')->textarea(['rows' => 2])->hint('当有外部链接时，优先使用外部链接') ?>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">SEO优化</h3>
            </div>
            <div class="box-body">

                <div class="col-sm-12">

                    <?= $form->field($model, 'seo_title')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'seo_keyword')->textarea(['rows' => 6]) ?>
                    <?= $form->field($model, 'seo_description')->textarea(['rows' => 6]) ?>


            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">设置</h3>
            </div>
            <div class="box-body">

                <div class="col-sm-12">



                    <div class="row">
                        <div class="col-sm-6">
                            <?= $form->field($model, 'is_nav')->dropDownList(WhetherEnum::getMap()) ?>
                        </div>
                        <div class="col-sm-6">
                            <?= $form->field($model, 'is_comment')->dropDownList(WhetherEnum::getMap()) ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6"><?= $form->field($model, 'is_blank')->dropDownList(WhetherEnum::getMap()) ?></div>
                        <div class="col-sm-6"><?= $form->field($model, 'status')->dropDownList(\common\enums\StatusEnum::getMap()) ?></div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>


<?php ActiveForm::end(); ?>