<?php

/** @var yii\web\View $this */
/** @var array $newsList */

use yii\bootstrap5\Html;
use yii\helpers\Url;

$this->title = Yii::t('app', 'What\'s New - SimpleMapp');
$this->params['breadcrumbs'][] = $this->title;

?>

<style>
.timeline {
    position: relative;
    padding: 2rem 0;
}

.timeline::before {
    content: '';
    position: absolute;
    left: 30px;
    top: 0;
    width: 3px;
    height: 100%;
    background: #dee2e6;
}

.timeline-item {
    position: relative;
    margin-bottom: 2.5rem;
    padding-left: 60px;
}

.timeline-dot {
    position: absolute;
    left: 30px;
    top: 0;
    width: 16px;
    height: 16px;
    background: #0d6efd;
    border-radius: 50%;
    border: 3px solid #fff;
}

.timeline-content {
    background: #ffffff; /* белый фон карточки */
    color: #212529;       /* темно-серый / почти черный текст */
    padding: 1.5rem;
    border-radius: 10px;
    box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,.075);
}


.timeline-date {
    font-size: 0.9rem;
    color: #6c757d;
    margin-bottom: 0.5rem;
}

.timeline-content img {
    max-height: 220px;
    object-fit: cover;
    border-radius: 8px;
    margin-bottom: 1rem;
}

@media (max-width: 768px) {
    .timeline::before {
        left: 15px;
    }
    .timeline-item {
        padding-left: 50px;
    }
    .timeline-dot {
        left: 15px;
    }
}
</style>

<div class="site-whats-new container">

    <h1 class="display-5 text-center mb-5">
        <?= Html::encode($this->title) ?>
    </h1>

    <p class="lead text-center mb-5">
        <?= Yii::t('app', 'Follow the latest updates and releases from SimpleMapp.') ?>
    </p>

    <div class="timeline">

        <?php foreach ($newsList as $key => $news): ?>
            <div class="timeline-item">

                <div class="timeline-dot"></div>

                <div class="timeline-content">

                    <div class="timeline-date">
                        <?= Yii::$app->formatter->asDate($news['date']) ?>
                    </div>

                    <h5><?= Html::encode($news['title']) ?></h5>

                    <?= Html::img('@web/img/' . $news['image'], [
                        'alt' => Html::encode($news['title']),
                        'class' => 'img-fluid',
                    ]) ?>

                    <p><?= Html::encode($news['description']) ?></p>

                    <a href="<?= Url::to(['/site/snews', 'id' => $key]) ?>" class="btn btn-outline-primary btn-sm">
                        <?= Yii::t('app', 'Read More') ?>
                    </a>


                </div>
            </div>
        <?php endforeach; ?>

    </div>

    <div class="text-center mt-4">
        <a class="btn btn-secondary btn-lg" href="<?= Url::to(['/site/products']) ?>">
            <?= Yii::t('app', 'Back to Products') ?>
        </a>
    </div>
</div>
