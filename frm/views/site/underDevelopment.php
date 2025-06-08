<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = Yii::t('app', 'Page Under Development');
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="site-under-development text-center">
    <h1><?= Html::encode($this->title) ?></h1>

    <p class="lead">
        <?= Yii::t('app', 'This page is currently under development and will be available soon.') ?>
    </p>
    <p>
        <?= Yii::t('app', 'We are working hard to bring you new and useful features. Please check back later!') ?>
    </p>

    <div class="mt-5">
        <?= Html::a(Yii::t('app', 'Go Back'), Yii::$app->request->referrer ?: Yii::$app->homeUrl, ['class' => 'btn btn-primary btn-lg']) ?>
    </div>
</div>