<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception $exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
        Вищезазначена помилка сталася під час обробки вашого запиту веб-сервером.
    </p>
    <p>
        Будь ласка, зв'яжіться з нами, якщо ви вважаєте, що це помилка сервера. Дякуємо.
    </p>

</div>
