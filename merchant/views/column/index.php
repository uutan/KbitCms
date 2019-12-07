<?php

use common\helpers\Html;
use common\helpers\Url;
use yii\grid\GridView;
use jianyan\treegrid\TreeGrid;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '栏目管理';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-sm-12">
        <div class="box">
            <div class="box-header">
                <div class="box-title"><?=$this->title;?></div>
                <div class="pull-right">
                    <?=Html::create(['edit'])?>
                </div>
            </div>
            <div class="box-body">
                <?= TreeGrid::widget([
                    'dataProvider' => $dataProvider,
                    'keyColumnName' => 'id',
                    'parentColumnName' => 'parent_id',
                    'parentRootValue' => '0', //first parentId value
                    'pluginOptions' => [
                        'initialState' => 'collapsed', // collapsed
                    ],
                    'options' => ['class' => 'table table-hover'],
                    'columns' => [
                        [
                            'class' => 'yii\grid\SerialColumn',
                            'visible' => false,
                        ],
                        //'id',
                        //'parent_id',
                        //'level',
                        [
                            'attribute' => 'name',
                            'format' => 'raw',
                            'value' => function ($model, $key, $index, $column){
                                $str = Html::tag('span', $model->name, [
                                    'class' => 'm-l-sm'
                                ]);
                                $str .= Html::a(' <i class="icon ion-android-add-circle"></i>', ['edit', 'parent_id' => $model['id']]);
                                return $str;
                            }
                        ],
                        //'name_remark',
                        'menu_name',
                        //'seo_title',
                        //'seo_keyword:ntext',
                        //'seo_description:ntext',
                        [
                            'attribute' => 'sort',
                            'format' => 'raw',
                            'value' => function($model){
                                return Html::sort($model->sort);
                            }
                        ],
                        //'image',
                        //'default_view',
                        //'status',
                        [
                            'attribute' => 'is_nav',
                            'format' => 'raw',
                            'value' => function($model){
                                return Html::a(Html::whether($model->is_nav),['ajax-edit','id' => $model->id],[
                                    'data-toggle' => 'modal',
                                    'data-target' => '#ajaxModal',
                                ]);
                            }
                        ],
                        //'is_mobile_nav',
                        //'is_blank',
                        //'url:ntext',
                        [
                            'attribute' => 'model_type',
                            'format' => 'raw',
                            'value' => function($model){
                                $modelData = \addons\KbitCms\common\enums\ModelEnum::getMap();
                                return $modelData[$model->model_type];
                            }
                        ],
                        //'created_at',
                        //'updated_at',
                        [
                            'class' => 'yii\grid\ActionColumn',
                            'header' => '操作',
                            'template' => '{edit} {status} {delete}',
                            'buttons' => [
                                'edit' => function($url, $model, $key){
                                    return Html::edit(['edit', 'id' => $model->id]);
                                },
                                'status' => function($url, $model, $key){
                                    return Html::status($model['status']);
                                },
                                'delete' => function($url, $model, $key){
                                    return Html::delete(['delete', 'id' => $model->id]);
                                },
                            ]
                        ]
                    ]
                ]); ?>
            </div>
        </div>
    </div>
</div>
