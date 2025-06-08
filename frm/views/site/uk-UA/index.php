<?php

/** @var yii\web\View $this */
use yii\helpers\Url;

// $this->title - глобальный заголовок страницы, будет переведен через Yii::t()
$this->title = Yii::t('app', 'SimpleMapp — Simplifying the world with mobile apps');
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4"><?= Yii::t('app', 'Welcome to SimpleMapp!') ?></h1>

        <p class="lead">
            Ми створюємо **прості та інтуїтивно зрозумілі мобільні додатки** для Android,
            які **спрощують ваше життя та навчання**.
        </p>

        <p class="mt-4">
            <a class="btn btn-lg btn-primary" href="<?= Url::to('products') ?>"><?= Yii::t('app', 'View Our Apps') ?></a>
            <a class="btn btn-lg btn-outline-secondary ms-3" href = "<?= Url::to('about') ?>"><?= Yii::t('app', 'Learn About SimpleMapp') ?></a>
        </p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4 mb-3">
                <h2><?= Yii::t('app', 'Ease of Use') ?></h2>

                <p>
                    У SimpleMapp ми віримо, що технології мають бути доступними кожному. Наші додатки розроблені з акцентом на **максимальну простоту та інтуїтивність**, щоб ви могли почати користуватися ними без зайвих зусиль, з перших хвилин.
                </p>

                <p><a class="btn btn-outline-secondary" href="<?= Url::to('under-development') ?>"><?= Yii::t('app', 'Our Philosophy &raquo;') ?></a></p>
            </div>
            <div class="col-lg-4 mb-3">
                <h2><?= Yii::t('app', 'For Education and Life') ?></h2>

                <p>
                    Ми створюємо додатки, які не тільки спрощують повсякденні завдання, але й **допомагають у навчанні та розвитку**. Від освітніх інструментів до утиліт для підвищення продуктивності – SimpleMapp пропонує рішення для різних сфер вашого життя.
                </p>

                <p><a class="btn btn-outline-secondary" href="<?= Url::to('products') ?>"><?= Yii::t('app', 'App Categories &raquo;') ?></a></p>
            </div>
            <div class="col-lg-4">
                <h2><?= Yii::t('app', 'Community and Support') ?></h2>

                <p>
                    SimpleMapp – це не просто додатки; це спільнота. Ми цінуємо зворотний зв’язок і постійно працюємо над покращеннями, щоб наші продукти відповідали вашим потребам. Ваша думка допомагає нам розвиватися.
                </p>

                <p><a class="btn btn-outline-secondary" href="<?= Url::to('contact') ?>"><?= Yii::t('app', 'Support and Contact &raquo;') ?></a></p>
            </div>
        </div>

        <hr class="my-5">

        <div class="row text-center mt-5">
            <div class="col-lg-12">
                <h2><?= Yii::t('app', 'Ready to simplify your world?') ?></h2>
                <p class="lead">
                    Дослідіть нашу колекцію корисних та зручних Android-додатків прямо зараз!
                </p>
                <p>
                    <a class="btn btn-success btn-lg" href="<?= Url::to('products') ?>"><?= Yii::t('app', 'Go to Apps') ?></a>
                </p>
            </div>
        </div>

    </div>
</div>