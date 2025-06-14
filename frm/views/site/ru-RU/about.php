<?php

/** @var yii\web\View $this */

use yii\bootstrap5\Html;
use yii\helpers\Url;

$this->title = 'О нас - SimpleMapp';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1 class="display-5"><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <p class="lead text-center mb-5">
                Мы — команда **SimpleMapp**, и наша миссия — **упрощать вашу цифровую жизнь** через создание интуитивно понятных и функциональных мобильных приложений для Android. Мы верим, что технологии должны быть доступны каждому, и стремимся создавать продукты, которые делают сложные задачи простыми.
            </p>
        </div>
    </div>

    <div class="row featurette align-items-center mb-5">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Наше видение: Простота в каждом решении.</h2>
            <p class="lead">
                В мире, где технологии становятся всё сложнее, мы идём по другому пути. SimpleMapp фокусируется на **создании приложений, которые работают быстро, эффективно и без лишних функций**. От образовательных инструментов, помогающих учиться новому, до повседневных утилит, экономящих ваше время — каждый наш продукт разрабатывается с мыслью о вашей простоте и удобстве.
            </p>
        </div>
        <div class="col-md-5 order-md-1">
            <?= Html::img('@web/img/simplest.png', ['alt' => 'Наше видение', 'class' => 'img-fluid rounded']) ?>
            <p class="text-muted text-center mt-2">Наше видение простоты</p>
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette align-items-center mb-5">
        <div class="col-md-7">
            <h2 class="featurette-heading">Наша команда: Страсть к Android и инновациям.</h2>
            <p class="lead">
                SimpleMapp — это небольшая, но сплоченная команда **разработчиков и дизайнеров, влюблённых в Android и Kotlin**. Мы постоянно учимся, экспериментируем и ищем новые способы сделать пользовательский опыт ещё лучше. Наша главная цель — создавать приложения, которыми приятно пользоваться и которые действительно приносят пользу.
            </p>
            <p><a class="btn btn-outline-primary" href="<?= Url::to('under-development') ?>">Познакомьтесь с командой &raquo;</a></p>
        </div>
        <div class="col-md-5">
            <?= Html::img('@web/img/command.png', ['alt' => 'Наша команда', 'class' => 'img-fluid rounded']) ?>
            <p class="text-muted text-center mt-2">Команда за работой</p>
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette align-items-center mb-5">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Наши продукты: Приложения для каждого.</h2>
            <p class="lead">
                От базовых обучающих программ, которые помогут освоить новые навыки, до специализированных инструментов для организации рабочего процесса — **SimpleMapp охватывает широкий спектр задач**. Мы регулярно обновляем наши приложения и выпускаем новые, чтобы оставаться актуальными и полезными для вас.
            </p>
            <p><a class="btn btn-primary" href="<?= Url::to('products') ?>">Перейти к нашим приложениям &raquo;</a></p>
        </div>
        <div class="col-md-5 order-md-1">
            <?= Html::img('@web/img/portfolio.png', ['alt' => 'Наши продукты', 'class' => 'img-fluid rounded']) ?>
            <p class="text-muted text-center mt-2">Приложения</p>
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row text-center mt-5">
        <div class="col-lg-12">
            <h2>Присоединяйтесь к SimpleMapp!</h2>
            <p class="lead">
                Мы всегда открыты для новых идей и обратной связи. Давайте вместе делать мир проще и функциональнее.
            </p>
            <p>
                <a class="btn btn-success btn-lg" href="<?= Url::to('contact') ?>">Связаться с нами</a>
            </p>
        </div>
    </div>

</div>