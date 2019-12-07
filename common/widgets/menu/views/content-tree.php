<?php

use common\helpers\Url;
?>

<?php foreach ($menus as $item) { ?>
    <?php if (!empty($item['-'])) { ?>
    <li class="border-bottom-none">
        <a href="<?= $item['fullUrl'] == '#' ? '' : Url::to($item['fullUrl']); ?>">
            <i class="fa fa-arrow-circle-right rf-i"></i>
            <?= $item['name']; ?>
        </a>
        <div class="box-body no-padding">
            <ul class="nav nav-pills nav-stacked">
                <?= $this->render('content-tree', [
                    'menus' => $item['-'],
                    'level' => $level + 1,
                ]) ?>
            </ul>
            <div class="hr-line-dashed"></div>
        </div>
    </li>

    <?php } else { ?>
        <li class="border-bottom-none">
            <a href="<?= $item['fullUrl'] == '#' ? '' : Url::to($item['fullUrl']); ?>">
                <i class="fa fa-arrow-circle-right rf-i"></i>
                <?= $item['name']; ?>
            </a>
        </li>
    <?php } ?>

<?php } ?>