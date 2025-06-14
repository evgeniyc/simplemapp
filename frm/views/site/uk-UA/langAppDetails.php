<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'LangApp - Вивчайте мови легко!';
$this->params['breadcrumbs'][] = ['label' => 'Наші продукти', 'url' => ['/site/products']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="site-langapp-details">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-md-8">
            <p class="lead">
                Ваш надійний помічник у вивченні іноземних мов. LangApp робить процес навчання захопливим та ефективним, допомагаючи вам освоїти нові слова та фрази в найкоротші терміни.
            </p>

            <h3>Про додаток</h3>
            <p>
                LangApp розроблено для всіх, хто хоче покращити свої мовні навички. Наш додаток пропонує інтерактивні уроки, вікторини та ігри, які допоможуть вам запам'ятовувати слова та граматичні правила. Ми зосередилися на створенні простого та зрозумілого інтерфейсу, щоб ніщо не відволікало вас від навчання.
            </p>
            <p>
                Особливості LangApp:
                <ul>
                    <li>Велика база слів і фраз для різних мов.</li>
                    <li>Інтерактивні вправи для закріплення матеріалу.</li>
                    <li>Відстеження прогресу навчання.</li>
                    <li>Режим офлайн для навчання в будь-який час та в будь-якому місці.</li>
                    <li>Щоденні нагадування для підтримки мотивації.</li>
                </ul>
            </p>
            <p>
                Завантажте LangApp сьогодні та почніть свій шлях до вільного володіння мовами!
            </p>

            <div class="mt-4">
                <a class="btn btn-primary btn-lg" href="https://play.google.com/store/apps/details?id=com.egenec.langapp&pcampaignid=web_share" target="_blank">
                    Завантажити LangApp на Google Play
                </a>
            </div>

        </div>
        <div class="col-md-4">
            <h3>Скріншоти</h3>
            <p>Додайте тут зображення або галерею скріншотів з вашого додатка.</p>
            <img src="<?= Url::to('@web/images/langapp_screenshot1.png') ?>" alt="Скріншот 1" class="img-fluid mb-3">
            <img src="<?= Url::to('@web/images/langapp_screenshot2.png') ?>" alt="Скріншот 2" class="img-fluid mb-3">
            </div>
    </div>

    <div class="mt-5">
        <?= Html::a('Повернутися до Продуктів', ['/site/products'], ['class' => 'btn btn-outline-secondary']) ?>
    </div>
</div>