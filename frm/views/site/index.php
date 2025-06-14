<?php
use yii\helpers\Url;
/** @var yii\web\View $this */

// $this->title - глобальный заголовок страницы
$this->title = 'SimpleMapp — Simplifying the world with mobile apps';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">Welcome to SimpleMapp!</h1>

        <p class="lead">
            We create **simple and intuitive mobile applications** for Android,
            that **simplify your life and learning**.
        </p>

        <p class="mt-4">
            <a class="btn btn-lg btn-primary" href="<?= Url::to('products') ?>">View Our Apps</a>
            <a class="btn btn-lg btn-outline-secondary ms-3" href="<?= Url::to('about') ?>">Learn About SimpleMapp</a>
        </p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4 mb-3">
                <h2>Ease of Use</h2>

                <p>
                    At SimpleMapp, we believe that technology should be accessible to everyone. Our applications are designed with an emphasis on **maximum simplicity and intuitiveness**, so you can start using them effortlessly from the very first minute.
                </p>

                <p><a class="btn btn-outline-secondary" href="<?= Url::to('under-development') ?>">Our Philosophy &raquo;</a></p>
            </div>
            <div class="col-lg-4 mb-3">
                <h2>For Education and Life</h2>

                <p>
                    We create applications that not only simplify everyday tasks but also **assist in learning and development**. From educational tools to productivity utilities – SimpleMapp offers solutions for various aspects of your life.
                </p>

                <p><a class="btn btn-outline-secondary" href="<?= Url::to('products') ?>">App Categories &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Community and Support</h2>

                <p>
                    SimpleMapp is not just about apps, it's a community. We value feedback and constantly work on improvements to ensure our products meet your needs. Your opinion helps us grow.
                </p>

                <p><a class="btn btn-outline-secondary" href="<?= Url::to('contact') ?>">Support and Contact &raquo;</a></p>
            </div>
        </div>

        <hr class="my-5">

        <div class="row text-center mt-5">
            <div class="col-lg-12">
                <h2>Ready to simplify your world?</h2>
                <p class="lead">
                    Explore our collection of useful and convenient Android applications now!
                </p>
                <p>
                    <a class="btn btn-success btn-lg" href="<?= Url::to('products') ?>">Go to Apps</a>
                </p>
            </div>
        </div>

    </div>
</div>