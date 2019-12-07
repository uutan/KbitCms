<?php
/**
 * Created by PhpStorm.
 * User: yangtanfang
 * Date: 2019/12/6
 * Time: 14:00
 */
use common\helpers\AddonHelper;
use common\helpers\Url;
use yii\widgets\LinkPager;

$path = AddonHelper::filePath();


$this->title = $column->name;
?>


<h1><?=$column->name;?></h1>



<?php foreach($dataProvider->getModels() as $item):?>
    <a href="<?=Url::to(['article','id' => $item->id])?>" class="list-group-item">
        <h4 class="list-group-item-heading"><?=$item->title;?></h4>
        <p class="list-group-item-text" style="margin: 10px 0; color:#999;"><?=date('Y-m-d H:i:s',$item->created_at);?></p>

    </a>
<?php endforeach;?>



<!-- 分页 -->
<?=LinkPager::widget([
        'pagination' => $dataProvider->pagination,
])?>