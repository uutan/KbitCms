<?php

use common\helpers\Html;
use common\helpers\Url;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = $column->name;
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
                <div class="box-tools">
                    <?= Html::create(['edit','column_id' => $column->id]) ?>
                </div>
            </div>
            <div class="box-body table-responsive">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'tableOptions' => ['class' => 'table table-hover'],
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn',
                'visible' => false,
            ],

            'id',
            //'merchant_id',
            //'column_id',
            [
                'attribute' => 'image',
                'format' => 'raw',
                'value' => function($model){
                    return \common\helpers\ImageHelper::fancyBox($model->image);
                }
            ],
            'title',
            //'remark:ntext',
            [
                'attribute' => 'sort',
                'format' => 'raw',
                'value' => function($model){
                    return Html::sort($model->sort);
                }
            ],
            //'status',
            //'seo_title',
            //'seo_keyword',
            //'seo_description:ntext',
            'created_at:datetime',
            //'updated_at',
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => '操作',
                'template' => '{edit} {status} {delete}',
                'buttons' => [
                    'edit' => function($url, $model, $key){
                        return Html::edit(['edit', 'id' => $model->id,'column_id' => $model->column_id]);
                    },
                    'status' => function($url, $model, $key){
                        return Html::status($model['status']);
                    },
                    'delete' => function($url, $model, $key){
                        return Html::delete(['delete', 'id' => $model->id,'column_id' => $model->column_id]);
                    },
                ]
            ]
    ]
    ]); ?>
            </div>
        </div>
    </div>
</div>
