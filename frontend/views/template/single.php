<?php
/**
 * Created by PhpStorm.
 * User: yangtanfang
 * Date: 2019/12/2
 * Time: 13:39
 */
use common\helpers\AddonHelper;

$path = AddonHelper::filePath();


$this->title = $column->name;

?>
<h1><?=$column->name;?></h1>

<div class="nyWrap w1260">



    <?=$single->content;?>


</div>

