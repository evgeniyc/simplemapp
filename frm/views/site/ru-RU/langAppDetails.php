<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'LangApp - Учите языки легко!';
$this->params['breadcrumbs'][] = ['label' => 'Наши продукты', 'url' => ['/site/products']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="site-langapp-details">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-md-8">
            <p class="lead">
                Ваш надежный помощник в изучении иностранных языков. LangApp делает процесс обучения увлекательным и эффективным, помогая вам освоить новые слова и фразы в кратчайшие сроки.
            </p>

            <h3>О приложении</h3>
            <p>
                LangApp разработан для всех, кто хочет улучшить свои языковые навыки. Наше приложение предлагает интерактивные уроки, викторины и игры, которые помогут вам запоминать слова и грамматические правила. Мы сосредоточились на создании простого и понятного интерфейса, чтобы ничто не отвлекало вас от изучения.
            </p>
            <p>
                Особенности LangApp:
                <ul>
                    <li>Обширная база слов и фраз для различных языков.</li>
                    <li>Интерактивные упражнения для закрепления материала.</li>
                    <li>Отслеживание прогресса обучения.</li>
                    <li>Режим оффлайн для обучения в любое время и в любом месте.</li>
                    <li>Ежедневные напоминания для поддержания мотивации.</li>
                </ul>
            </p>
            <p>
                Скачайте LangApp сегодня и начните свой путь к свободному владению языками!
            </p>

            <div class="mt-4">
                <a class="btn btn-primary btn-lg" href="https://play.google.com/store/apps/details?id=com.egenec.langapp&pcampaignid=web_share" target="_blank">
                    Скачать LangApp на Google Play
                </a>
            </div>

        </div>
        <div class="col-md-4">
            <h3>Скриншоты</h3>
            <p>Добавьте здесь изображения или галерею скриншотов из вашего приложения.</p>
            <img src="<?= Url::to('@web/images/langapp_screenshot1.png') ?>" alt="Скриншот 1" class="img-fluid mb-3">
            <img src="<?= Url::to('@web/images/langapp_screenshot2.png') ?>" alt="Скриншот 2" class="img-fluid mb-3">
            </div>
    </div>

    <div class="mt-5">
        <?= Html::a('Назад к Продуктам', ['/site/products'], ['class' => 'btn btn-outline-secondary']) ?>
    </div>
</div>