<?php

/** @var yii\web\View $this */

use yii\bootstrap5\Html;

// $this->title - глобальный заголовок страницы, переводим через Yii::t()
$this->title = Yii::t('app', 'Our Products - SimpleMapp');
$this->params['breadcrumbs'][] = $this->title;

// Пример данных для приложений. В реальном проекте они могли бы быть получены из базы данных.
// Эти данные будут переводиться в соответствующих view-файлах для каждого языка.
$applications = [
    [
        'id' => 'educational-lang',
        'name' => 'German A1 Flashcards', // Переведено
        'image' => 'iconsa.jpg',
        'description' => 'Interactive app for learning German words. Ideal for children and adults who want to expand their vocabulary. Simple methodology and clear explanations.', // Переведено
        'link' => 'cards-de', // Ссылка на страницу с деталями приложения
        'download_link' => 'https://play.google.com/store/apps/details?id=com.egenec.langapp&pcampaignid=web_share',
    ],
    [
        'id' => 'daily-planner',
        'name' => 'Multilang Flashcards', // Переведено
        'image' => 'multilang.jpg',
        'description' => 'Your personal daily organizer. Create to-do lists, set reminders, and track progress. Simple, convenient, and effective.', // Переведено
        'link' => 'lang-app-details',
        'download_link' => 'https://play.google.com/store/apps/details?id=your.planner.app',
    ],
    [
        'id' => 'language-learn',
        'name' => 'SimpleLingua: Learn English Easily', // Переведено
        'image' => 'lingua_app.png',
        'description' => 'Start learning English from scratch or improve your skills. Daily lessons, vocabulary flashcards, and practical exercises for quick progress.', // Переведено
        'link' => '/site/product-details?id=language-learn',
        'download_link' => 'https://play.google.com/store/apps/details?id=your.lingua.app',
    ],
    [
        'id' => 'cooking-recipes',
        'name' => 'SimpleCook: Recipes for Every Day', // Переведено
        'image' => 'cooking_app.png',
        'description' => 'Thousands of tried-and-tested recipes for every taste. Step-by-step instructions, smart ingredient search, and the ability to save your favorite dishes. Cook with pleasure!', // Переведено
        'link' => '/site/product-details?id=cooking-recipes',
        'download_link' => 'https://play.google.com/store/apps/details?id=your.cook.app',
    ],
    // Добавь больше приложений по аналогии, переведенных на английский
];
?>

<div class="site-products">
    <h1 class="display-5 text-center mb-5"><?= Html::encode($this->title) ?></h1>

    <p class="lead text-center mb-5">
        At **SimpleMapp**, we are proud to create simple yet powerful Android applications,
        that help you in education, daily life organization, and development. 
        Discover our products, made with care for you!
    </p>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <?php foreach ($applications as $app): ?>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-img-top-wrapper text-center p-3">
                        <?= Html::img('@web/img/' . $app['image'], [
                            'alt' => Html::encode($app['name']), // alt-текст изображения также из данных приложения
                            'class' => 'img-fluid',
                            'style' => 'max-height: 180px; object-fit: contain;',
                        ]) ?>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><?= Html::encode($app['name']) ?></h5>
                        <p class="card-text"><?= Html::encode($app['description']) ?></p>
                        <div class="mt-auto">
                            <a href="<?= Html::encode($app['link']) ?>" class="btn btn-outline-primary w-100 mb-2"><?= Yii::t('app', 'Details') ?></a>
                            <?php if ($app['download_link']): ?>
                                <a href="<?= Html::encode($app['download_link']) ?>" class="btn btn-success w-100" target="_blank" rel="noopener noreferrer"><?= Yii::t('app', 'Download on Google Play') ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="text-center mt-5">
        <p class="lead">
            <?= Yii::t('app', 'Stay tuned for our updates! We are constantly working on new applications and improving existing ones.') ?>
        </p>
        <a class="btn btn-info btn-lg" href="/site/updates"><?= Yii::t('app', 'What\'s New in SimpleMapp?') ?></a>
    </div>

</div>