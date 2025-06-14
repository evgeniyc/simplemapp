<?php

/** @var yii\web\View $this */

use yii\bootstrap5\Html;
use yii\helpers\Url;

// $this->title и $this->params['breadcrumbs'] - глобальные элементы, переводим через Yii::t()
$this->title = Yii::t('app', 'About Us - SimpleMapp');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1 class="display-5"><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <p class="lead text-center mb-5">
                We are the **SimpleMapp** team, and our mission is to **simplify your digital life** by creating intuitive and functional mobile applications for Android. We believe that technology should be accessible to everyone, and we strive to create products that make complex tasks simple.
            </p>
        </div>
    </div>

    <div class="row featurette align-items-center mb-5">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading"><?= Yii::t('app', 'Our Vision: Simplicity in Every Solution.') ?></h2>
            <p class="lead">
                In a world where technology is becoming increasingly complex, we are taking a different path. SimpleMapp focuses on **creating applications that work quickly, efficiently, and without unnecessary features**. From educational tools that help you learn new skills, to everyday utilities that save you time – every product we develop is designed with your simplicity and convenience in mind.
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
                SimpleMapp is a small but cohesive team of **developers and designers in love with Android and Kotlin**. We are constantly learning, experimenting, and finding new ways to improve the user experience. Our main goal is to create applications that are a pleasure to use and truly beneficial.
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
                From basic educational programs that help you master new skills to specialized tools for organizing your workflow – **SimpleMapp covers a wide range of tasks**. We regularly update our applications and release new ones to stay relevant and useful for you.
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
        <div class="col-lg-12">
            <h2><?= Yii::t('app', 'Join SimpleMapp!') ?></h2>
            <p class="lead">
                We are always open to new ideas and feedback. Let's make the world simpler and more functional together.
            </p>
            <p>
                <a class="btn btn-success btn-lg" href="<?= Url::to('contact') ?>"><?= Yii::t('app', 'Contact Us') ?></a>
            </p>
        </div>
    </div>

</div>