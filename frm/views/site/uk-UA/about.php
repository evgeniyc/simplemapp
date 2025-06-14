<?php

/** @var yii\web\View $this */

use yii\bootstrap5\Html;
use yii\helpers\Url;

// $this->title та $this->params['breadcrumbs'] - глобальні елементи, будуть перекладені через Yii::t()
$this->title = Yii::t('app', 'About Us - SimpleMapp');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1 class="display-5"><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <p class="lead text-center mb-5">
                Ми — команда **SimpleMapp**, і наша місія — **спрощувати ваше цифрове життя** через створення інтуїтивно зрозумілих та функціональних мобільних додатків для Android. Ми віримо, що технології мають бути доступними кожному, і прагнемо створювати продукти, які роблять складні завдання простими.
            </p>
        </div>
    </div>

    <div class="row featurette align-items-center mb-5">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading"><?= Yii::t('app', 'Our Vision: Simplicity in Every Solution.') ?></h2>
            <p class="lead">
                У світі, де технології стають дедалі складнішими, ми йдемо іншим шляхом. SimpleMapp фокусується на **створенні додатків, які працюють швидко, ефективно та без зайвих функцій**. Від освітніх інструментів, що допомагають навчатися новому, до повсякденних утиліт, що економлять ваш час — кожен наш продукт розробляється з думкою про вашу простоту та зручність.
            </p>
        </div>
        <div class="col-md-5 order-md-1">
            <?= Html::img('@web/img/simplest.png', ['alt' => Yii::t('app', 'Our Vision'), 'class' => 'img-fluid rounded']) ?>
            <p class="text-muted text-center mt-2"><?= Yii::t('app', 'Our vision of simplicity') ?></p>
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette align-items-center mb-5">
        <div class="col-md-7">
            <h2 class="featurette-heading"><?= Yii::t('app', 'Our Team: Passion for Android and Innovation.') ?></h2>
            <p class="lead">
                SimpleMapp — це невелика, але згуртована команда **розробників та дизайнерів, закоханих у Android та Kotlin**. Ми постійно вчимося, експериментуємо та шукаємо нові способи зробити користувацький досвід ще кращим. Наша головна мета — створювати додатки, якими приємно користуватися і які дійсно приносять користь.
            </p>
            <p><a class="btn btn-outline-primary" href="<?= Url::to('under-development') ?>"><?= Yii::t('app', 'Meet the Team &raquo;') ?></a></p>
        </div>
        <div class="col-md-5">
            <?= Html::img('@web/img/command.png', ['alt' => Yii::t('app', 'Our Team'), 'class' => 'img-fluid rounded']) ?>
            <p class="text-muted text-center mt-2"><?= Yii::t('app', 'Team at work') ?></p>
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette align-items-center mb-5">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading"><?= Yii::t('app', 'Our Products: Apps for Everyone.') ?></h2>
            <p class="lead">
                Від базових навчальних програм, які допоможуть освоїти нові навички, до спеціалізованих інструментів для організації робочого процесу — **SimpleMapp охоплює широкий спектр завдань**. Ми регулярно оновлюємо наші додатки та випускаємо нові, щоб залишатися актуальними та корисними для вас.
            </p>
            <p><a class="btn btn-primary" href="<?= Url::to('products') ?>"><?= Yii::t('app', 'Go to Our Apps &raquo;') ?></a></p>
        </div>
        <div class="col-md-5 order-md-1">
            <?= Html::img('@web/img/portfolio.png', ['alt' => Yii::t('app', 'Our Products'), 'class' => 'img-fluid rounded']) ?>
            <p class="text-muted text-center mt-2"><?= Yii::t('app', 'Applications') ?></p>
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row text-center mt-5">