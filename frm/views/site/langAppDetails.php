<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'LangApp - Learn Languages Easily!';
$this->params['breadcrumbs'][] = ['label' => 'Our Products', 'url' => ['/site/products']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="site-langapp-details">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-md-8">
            <p class="lead">
                Your reliable assistant for learning foreign languages. LangApp makes the learning process engaging and effective, helping you master new words and phrases in no time.
            </p>

            <h3>About the App</h3>
            <p>
                LangApp is designed for everyone who wants to improve their language skills. Our app offers interactive lessons, quizzes, and games that will help you memorize words and grammar rules. We focused on creating a simple and clear interface so that nothing distracts you from learning.
            </p>
            <p>
                LangApp features:
                <ul>
                    <li>Extensive database of words and phrases for various languages.</li>
                    <li>Interactive exercises to reinforce material.</li>
                    <li>Progress tracking.</li>
                    <li>Offline mode for learning anytime, anywhere.</li>
                    <li>Daily reminders to maintain motivation.</li>
                </ul>
            </p>
            <p>
                Download LangApp today and start your journey to fluent language proficiency!
            </p>

            <div class="mt-4">
                <a class="btn btn-primary btn-lg" href="https://play.google.com/store/apps/details?id=com.egenec.langapp&pcampaignid=web_share" target="_blank">
                    Download LangApp on Google Play
                </a>
            </div>

        </div>
        <div class="col-md-4">
            <h3>Screenshots</h3>
            <p>Add images or a gallery of screenshots from your app here.</p>
            <img src="<?= Url::to('@web/images/langapp_screenshot1.png') ?>" alt="LangApp Screenshot 1" class="img-fluid mb-3">
            <img src="<?= Url::to('@web/images/langapp_screenshot2.png') ?>" alt="LangApp Screenshot 2" class="img-fluid mb-3">
            </div>
    </div>

    <div class="mt-5">
        <?= Html::a('Back to Products', ['/site/products'], ['class' => 'btn btn-outline-secondary']) ?>
    </div>
</div>