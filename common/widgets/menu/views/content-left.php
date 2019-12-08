<?php
use common\helpers\Url;
?>
<div class="box box-solid p-xs rfAddonMenu">
    <?php if (!empty($menus)) { ?>
        <?php foreach ($menus as $item) { ?>
            <?php if (!empty($item['-'])) { ?>
                <div class="box-header with-border">
                    <h3 class="rf-box-title">
                        <a href="<?= $item['fullUrl'] == '#' ? '' : Url::to($item['fullUrl']); ?>">
                            <?= $item['name']; ?>
                        </a>
                    </h3>
                </div>
                <div class="box-body no-padding">
                    <ul class="nav nav-pills nav-stacked">
                        <?= $this->render('content-tree', [
                            'menus' => $item['-'],
                            'level' => 1,
                        ]) ?>
                    </ul>
                </div>
            <?php } else { ?>
                <div class="box-header with-border">
                    <h3 class="rf-box-title">
                        <a href="<?= $item['fullUrl'] == '#' ? '' : Url::to($item['fullUrl']); ?>">
                            <?= $item['name']; ?>
                        </a>
                    </h3>
                </div>
            <?php } ?>

        <?php } ?>
    <?php } ?>
</div>
<div class="box box-solid p-xs rfAddonMenu">
    <div class="box-header with-border">
        <h3 class="rf-box-title">
            组件管理
        </h3>
    </div>
    <div class="box-body no-padding">
        <ul class="nav nav-pills nav-stacked">
            <?php foreach($widgets as $item):?>
            <li class="border-bottom-none">
                <a href="<?= $item['url'] == '#' ? '' : Url::to($item['url']); ?>">
                    <i class="<?=$item['icon']?> rf-i"></i>
                    <?= $item['label']; ?>
                </a>
            </li>
            <?php endforeach;?>
        </ul>
    </div>
</div>


