<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'German A1 Flashcards - Learn German Easily!';
$this->params['breadcrumbs'][] = ['label' => 'Our Products', 'url' => ['/site/products']];
$this->params['breadcrumbs'][] = $this->title;
$this->params['backgroundImage'] = 'cards-de.png'; // Path to the background image

?>
<div class="site-cardsde-details">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-md-8">
            <p class="lead">
                Welcome to the "German A1 Flashcards" app — Your reliable assistant for learning German!
            </p>

            <h3>Description</h3>
            <p>
                "German A1 Flashcards" is a convenient app that will help you:
                <ul>
                    <li>Expand your vocabulary: use ready-made A1 level sets.</li>
                    <li>Learn new words: Learn new words using interactive flashcards.</li>
                    <li>Track progress: Activity is recorded and displayed in the category list.</li>
                    <li>Study anywhere: Use the app anywhere at your convenience.</li>
                    <li>Study without internet: You can study words without an internet connection.</li>
                    <li>View on screenshots: See how it works on screenshots.</li>
                </ul>
            </p>

            <h3>Advantages of "German A1 Flashcards":</h3>
            <ul>
                <li>Simple and intuitive interface.</li>
                <li>Interactive flashcards for effective learning.</li>
                <li>Statistics for tracking progress.</li>
                <li>Ability to create lists of learned and important words.</li>
                <li>Available anytime and anywhere.</li>
            </ul>

            <h3>How to use "German A1 Flashcards":</h3>
            <ol>
                <li>Download the app.</li>
                <li>No registration required.</li>
                <li>Just launch the app.</li>
                <li>Start learning words with flashcards.</li>
                <li>Create your lists of learned and important words.</li>
                <li>Use filtering under the gear icon.</li>
                <li>Track progress in the category list.</li>
            </ol>
            <p>
                Download "German A1 Flashcards" now and start learning German easily and effectively!
            </p>
            <p>
                Version: 1.1.1-beta1<br>
                Last updated: Jun 2, 2025
            </p>

            <div class="mt-4">
                <a class="btn btn-primary btn-lg" href="https://play.google.com/store/apps/details?id=com.egenec.langapp&pcampaignid=web_share" target="_blank">
                    Download "German A1 Flashcards" on Google Play
                </a>
            </div>

        </div>
        <div class="col-md-4">
            <h3>Screenshots</h3>
            <p>Add images or a gallery of screenshots from your app here.</p>
            <img src="<?= Url::to('@web/images/cards_de_screenshot1.png') ?>" alt="Screenshot 1" class="img-fluid mb-3">
            <img src="<?= Url::to('@web/images/cards_de_screenshot2.png') ?>" alt="Screenshot 2" class="img-fluid mb-3">
            </div>
    </div>

    <div class="mt-5">
        <?= Html::a('Back to Products', ['/site/products'], ['class' => 'btn btn-outline-secondary']) ?>
    </div>
</div>