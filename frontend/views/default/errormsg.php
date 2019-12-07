<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use common\helpers\Html;


$this->title = '出错了';
?>
<div class="site-error">

    <h1>出错了</h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($info)) ?>
    </div>

    <p>
        The above error occurred while the Web server was processing your request.
    </p>
    <p>
        Please contact us if you think this is a server error. Thank you.
    </p>

</div>
