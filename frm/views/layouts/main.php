<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);

$currentLanguage = Yii::$app->language;

// Определяем все поддерживаемые языки и их отображаемые названия
$allLanguages = [
    'uk-UA' => 'УКР',
    'ru-RU' => 'РУС',
    'en' => 'ENG',
    // Добавь другие языки, если нужно
];

// Получаем отображаемое название для текущего языка
$currentLanguageLabel = isset($allLanguages[$currentLanguage]) ? $allLanguages[$currentLanguage] : 'Language'; // 'Language' как запасной вариант

// --- Блок для выпадающего списка переключения языка ---
$languageDropdownItems = [];

// Генерируем элементы выпадающего списка для ВСЕХ языков
// Текущий язык обычно не является ссылкой, или его можно выделить
foreach ($allLanguages as $langCode => $langLabel) {
    // Если это текущий язык, то не делаем его кликабельным в самом списке или выделяем его
    // В данном случае, текущий язык будет показан в заголовке дропдауна,
    // а в самом списке будут только альтернативные языки.
    if ($langCode !== $currentLanguage) {
        $languageDropdownItems[] =
            '<li>' .
            Html::beginForm(['/site/set-language'], 'post', ['class' => 'd-inline-block', 'id' => 'lang-switch-' . $langCode]) .
            Html::hiddenInput('language', $langCode) .
            Html::a(
                $langLabel,
                '#', // Ссылка на себя, фактический переход будет через JS
                [
                    'class' => 'dropdown-item',
                    'onclick' => 'document.getElementById(\'lang-switch-' . $langCode . '\').submit(); return false;',
                    'title' => 'Change language to ' . $langLabel,
                ]
            ) .
            Html::endForm() .
            '</li>';
    }
}

// --- Формируем окончательный HTML для выпадающего списка ---
$languageSwitchHtml = '';
if (!empty($languageDropdownItems)) {
    $languageSwitchHtml =
        '<li class="nav-item dropdown">'
        . '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownLanguage" role="button" data-bs-toggle="dropdown" aria-expanded="false">'
        . $currentLanguageLabel // Отображаем текущий язык в заголовке дропдауна
        . '</a>'
        . '<ul class="dropdown-menu" aria-labelledby="navbarDropdownLanguage">'
        . implode("\n", $languageDropdownItems) // Объединяем все сгенерированные пункты
        . '</ul>'
        . '</li>';
}

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header id="header">
    <?php
    NavBar::begin([
        'brandLabel' => Html::img('@web/img/simplem4.png', 
		[
			'alt' => 'Логотип Simplemapp', 
			'class' => 'me-2', 
			'style' => 'height: 55px;'
		]) . '<span style="color:yellow; text-shadow: 0 0 3px black;">'.Yii::$app->name.'</span>',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => ['class' => 'navbar-expand-md navbar-dark bg-primary fixed-top py-0']
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav ms-auto'],
        'items' => [
            ['label' => Yii::t('app', 'Home'), 'url' => ['/site/index']],
            ['label' => Yii::t('app', 'About'), 'url' => ['/site/about']],
			['label' => Yii::t('app', 'Products'), 'url' => ['/site/products']],
            ['label' => Yii::t('app', 'Contact'), 'url' => ['/site/contact']],
           
        // Вставляем элементы переключателя языка напрямую
        $languageSwitchHtml
    ]
    ]);
    NavBar::end();
    ?>
</header>

<main id="main" class="flex-shrink-0" role="main">
    <div class="container">
		<div class = "content">
			<?php if (!empty($this->params['breadcrumbs'])): ?>
				<?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
			<?php endif ?>
			<?= Alert::widget() ?>
			<?= $content ?>
		</div>
	</div>
</main>

<footer id="footer" class="mt-auto py-3 bg-light">
    <div class="container">
        <div class="row text-muted">
            <div class="col-md-6 text-center text-md-start">&copy; <?= Yii::$app->name.'&nbsp'.date('Y') ?></div>
            <div class="col-md-6 text-center text-md-end"><?= Yii::powered() ?></div>
        </div>
		</div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
