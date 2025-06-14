<?php

/** @var yii\web\View $this */

use yii\bootstrap5\Html;

$this->title = 'Наши продукты - SimpleMapp';
$this->params['breadcrumbs'][] = $this->title;

// Пример данных для приложений. В реальном проекте они могли бы быть получены из базы данных.
$applications = [
    [
        'id' => 'educational-lang',
        'name' => 'Карточки Немецкий А1',
        'image' => 'iconsa.jpg', // Путь к изображению приложения
        'description' => 'Интерактивное приложение для изучения немецких слов. Идеально подходит для детей и взрослых, желающих пополнить словарный запас. Простая методика и понятные объяснения.',
        'link' => 'cards-de', // Ссылка на страницу с деталями приложения
        'download_link' => 'https://play.google.com/store/apps/details?id=com.egenec.langapp&pcampaignid=web_share', // Ссылка на Google Play
    ],
    [
        'id' => 'daily-planner',
        'name' => 'Карточки multilang',
        'image' => 'multilang.jpg',
        'description' => 'Ваш личный помощник в организации дня. Создавайте списки дел, устанавливайте напоминания и отслеживайте прогресс. Просто, удобно и эффективно.',
        'link' => 'lang-app-details',
        'download_link' => 'https://play.google.com/store/apps/details?id=your.planner.app',
    ],
    [
        'id' => 'language-learn',
        'name' => 'SimpleLingua: Учи английский легко',
        'image' => 'lingua_app.png',
        'description' => 'Начните изучать английский язык с нуля или улучшите свои навыки. Ежедневные уроки, словарные карточки и практические упражнения для быстрого прогресса.',
        'link' => '/site/product-details?id=language-learn',
        'download_link' => 'https://play.google.com/store/apps/details?id=your.lingua.app',
    ],
    [
        'id' => 'cooking-recipes',
        'name' => 'SimpleCook: Рецепты на каждый день',
        'image' => 'cooking_app.png',
        'description' => 'Тысячи проверенных рецептов на любой вкус. Пошаговые инструкции, умный поиск по ингредиентам и возможность сохранять любимые блюда. Готовьте с удовольствием!',
        'link' => '/site/product-details?id=cooking-recipes',
        'download_link' => 'https://play.google.com/store/apps/details?id=your.cook.app',
    ],
    // Добавь больше приложений по аналогии
];
?>

<div class="site-products">
    <h1 class="display-5 text-center mb-5"><?= Html::encode($this->title) ?></h1>

    <p class="lead text-center mb-5">
        В **SimpleMapp** мы гордимся тем, что создаем простые, но мощные Android-приложения,
        которые помогают вам в образовании, организации повседневной жизни и развитии.
        Откройте для себя наши продукты, созданные с заботой о вас!
    </p>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <?php foreach ($applications as $app): ?>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-img-top-wrapper text-center p-3">
                        <?= Html::img('@web/img/' . $app['image'], [
                            'alt' => $app['name'],
                            'class' => 'img-fluid',
                            'style' => 'max-height: 180px; object-fit: contain;', // Ограничиваем высоту для единообразия
                        ]) ?>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><?= Html::encode($app['name']) ?></h5>
                        <p class="card-text"><?= Html::encode($app['description']) ?></p>
                        <div class="mt-auto">
                            <a href="<?= Html::encode($app['link']) ?>" class="btn btn-outline-primary w-100 mb-2">Подробнее</a>
                            <?php if ($app['download_link']): ?>
                                <a href="<?= Html::encode($app['download_link']) ?>" class="btn btn-success w-100" target="_blank" rel="noopener noreferrer">Скачать на Google Play</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="text-center mt-5">
        <p class="lead">
            Следите за нашими обновлениями! Мы постоянно работаем над новыми приложениями и улучшением существующих.
        </p>
        <a class="btn btn-info btn-lg" href="/site/updates">Что нового в SimpleMapp?</a>
    </div>

</div>