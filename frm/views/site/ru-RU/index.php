<?php

/** @var yii\web\View $this */
use yii\helpers\Url;

$this->title = 'SimpleMapp — Упрощаем мир с помощью мобильных приложений';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">Добро пожаловать в SimpleMapp!</h1>

        <p class="lead">
            Мы создаем **простые и интуитивно понятные мобильные приложения** для Android,
            которые **упрощают вашу жизнь и обучение**.
        </p>

        <p class="mt-4">
            <a class="btn btn-lg btn-primary" href="<?= Url::to('products') ?>">Посмотреть наши приложения</a>
            <a class="btn btn-lg btn-outline-secondary ms-3" href="/site/about">Узнать о SimpleMapp</a>
        </p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4 mb-3">
                <h2>Легкость использования</h2>

                <p>
                    В SimpleMapp мы верим, что технологии должны быть доступны каждому. Наши приложения разработаны с акцентом на **максимальную простоту и интуитивность**, чтобы вы могли начать пользоваться ими без лишних усилий, с первых минут.
                </p>

                <p><a class="btn btn-outline-secondary" href="/site/philosophy">Наша философия &raquo;</a></p>
            </div>
            <div class="col-lg-4 mb-3">
                <h2>Для образования и жизни</h2>

                <p>
                    Мы создаем приложения, которые не только упрощают повседневные задачи, но и **помогают в обучении и развитии**. От образовательных инструментов до утилит для повышения продуктивности – SimpleMapp предлагает решения для самых разных сфер вашей жизни.
                </p>

                <p><a class="btn btn-outline-secondary" href="/site/categories">Категории приложений &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Сообщество и поддержка</h2>

                <p>
                    SimpleMapp – это не просто приложения, это сообщество. Мы ценим обратную связь и постоянно работаем над улучшениями, чтобы наши продукты отвечали вашим потребностям. Ваше мнение помогает нам развиваться.
                </p>

                <p><a class="btn btn-outline-secondary" href="/site/support">Поддержка и связь &raquo;</a></p>
            </div>
        </div>

        <hr class="my-5">

        <div class="row text-center mt-5">
            <div class="col-lg-12">
                <h2>Готовы упростить свой мир?</h2>
                <p class="lead">
                    Исследуйте нашу коллекцию полезных и удобных Android-приложений прямо сейчас!
                </p>
                <p>
                    <a class="btn btn-success btn-lg" href="/site/products">Перейти к приложениям</a>
                </p>
            </div>
        </div>

    </div>
</div>