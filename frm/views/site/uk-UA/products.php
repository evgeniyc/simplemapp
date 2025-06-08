<?php

/** @var yii\web\View $this */

use yii\bootstrap5\Html;

// $this->title - глобальний заголовок сторінки, буде перекладений через Yii::t()
$this->title = Yii::t('app', 'Our Products - SimpleMapp');
$this->params['breadcrumbs'][] = $this->title;

// Приклад даних для додатків. У реальному проекті вони могли б бути отримані з бази даних.
// Цей масив тепер містить українські переклади імен та описів.
$applications = [
    [
        'id' => 'educational-lang',
        'name' => 'Картки Німецька А1', // Перекладено
        'image' => 'iconsa.jpg',
        'description' => 'Інтерактивний додаток для вивчення німецьких слів. Ідеально підходить для дітей та дорослих, які бажають поповнити словниковий запас. Проста методика та зрозумілі пояснення.', // Перекладено
        'link' => '/site/product-details?id=educational-math',
        'download_link' => 'https://play.google.com/store/apps/details?id=your.math.app',
    ],
    [
        'id' => 'daily-planner',
        'name' => 'Картки multilang', // Перекладено
        'image' => 'multilang.jpg',
        'description' => 'Ваш особистий помічник в організації дня. Створюйте списки справ, встановлюйте нагадування та відстежуйте прогрес. Просто, зручно та ефективно.', // Перекладено
        'link' => '/site/product-details?id=daily-planner',
        'download_link' => 'https://play.google.com/store/apps/details?id=your.planner.app',
    ],
    [
        'id' => 'language-learn',
        'name' => 'SimpleLingua: Вивчай англійську легко', // Перекладено
        'image' => 'lingua_app.png',
        'description' => 'Почніть вивчати англійську мову з нуля або покращте свої навички. Щоденні уроки, словникові картки та практичні вправи для швидкого прогресу.', // Перекладено
        'link' => '/site/product-details?id=language-learn',
        'download_link' => 'https://play.google.com/store/apps/details?id=your.lingua.app',
    ],
    [
        'id' => 'cooking-recipes',
        'name' => 'SimpleCook: Рецепти на кожен день', // Перекладено
        'image' => 'cooking_app.png',
        'description' => 'Тисячі перевірених рецептів на будь-який смак. Покрокові інструкції, розумний пошук за інгредієнтами та можливість зберігати улюблені страви. Готуйте із задоволенням!', // Перекладено
        'link' => '/site/product-details?id=cooking-recipes',
        'download_link' => 'https://play.google.com/store/apps/details?id=your.cook.app',
    ],
    // Додай більше додатків за аналогією, перекладених українською
];
?>

<div class="site-products">
    <h1 class="display-5 text-center mb-5"><?= Html::encode($this->title) ?></h1>

    <p class="lead text-center mb-5">
        <?= Yii::t('app', 'At **SimpleMapp**, we are proud to create simple yet powerful Android applications,') ?>
        <?= Yii::t('app', 'that help you in education, daily life organization, and development.') ?>
        <?= Yii::t('app', 'Discover our products, made with care for you!') ?>
    </p>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <?php foreach ($applications as $app): ?>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-img-top-wrapper text-center p-3">
                        <?= Html::img('@web/img/' . $app['image'], [
                            'alt' => Html::encode($app['name']),
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