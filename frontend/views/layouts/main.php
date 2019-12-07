<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use common\helpers\Html;
use addons\KbitCms\backend\assets\AppAsset;
use common\helpers\AddonHelper;

AppAsset::register($this);



// 资源目录
$path = AddonHelper::filePath();

// 动态菜单
$menus = $this->context->getMenus();
$menuItems = [];
foreach($menus as $item){
    $itemData = [
        'label' => $item['name'],
        'url' => $item['fullUrl'],
        'image' => $item['image'],
        'desc' => $item['seo_description'],
        'items' => [],
    ];
    $items = [];
    if( count($item["-"]) )
    {
        $subItemData = [];
        foreach($item["-"] as $sub)
        {
            $subItemData[] = [
                'label' => $sub['name'],
                'url' => $sub['fullUrl']
            ];
        }
        $items = $subItemData;
        $itemData['items'] = $items;
    }

    $menuItems[] = $itemData;
}
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container" style="padding-top: 100px;">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>


        <?= $content ?>

    </div>
</div>



<footer class="footer">
    <div class="container">
        <p class="pull-left">
            <?=Yii::$app->debris->config('web_copyright');?>
        </p>
        <p class="pull-right"></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
