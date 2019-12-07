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
                    <div class="hr-line-dashed"></div>
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



