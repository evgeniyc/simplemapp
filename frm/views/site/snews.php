<?php

/** @var yii\web\View $this */
/** @var array $news */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = Html::encode($news['title']);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', "What's New"), 'url' => ['site/news']];
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="site-news container">

    <h1 class="display-5 text-center mb-4"><?= Html::encode($news['title']) ?></h1>

    <p class="text-muted text-center mb-4">
        <?= Yii::$app->formatter->asDate($news['date']) ?>
    </p>

    <div class="text-center mb-4">
        <?= Html::img('@web/img/' . $news['image'], [
            'class' => 'img-fluid rounded',
            'alt' => Html::encode($news['title']),
            'style' => 'max-height: 400px; object-fit: cover;',
        ]) ?>
    </div>

    <div class="news-content mb-5" style="font-size: 1.1rem; line-height: 1.6;">
        <p><?= Html::encode($news['description']) ?></p>
    </div>

    <div class="text-center">
        <a class="btn btn-secondary btn-lg" href="<?= Url::to(['/site/news']) ?>">
            <?= Yii::t('app', 'Back to News') ?>
        </a>
    </div>

</div>
