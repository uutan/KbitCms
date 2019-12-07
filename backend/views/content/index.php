<?php
/**
 * Created by PhpStorm.
 * User: yangtanfang
 * Date: 2019/11/19
 * Time: 18:09
 */
use common\helpers\Html;
use common\helpers\Url;
use yii\grid\GridView;
use jianyan\treegrid\TreeGrid;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '内容管理';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="callout callout-info">
    <h4>提示：</h4>

    <p>点击左侧菜单，即可编辑栏目内容。</p>
</div>