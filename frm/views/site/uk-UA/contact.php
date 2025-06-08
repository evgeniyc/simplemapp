<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\captcha\Captcha;

// Заголовок страницы оставим через Yii::t(), так как он глобальный
$this->title = Yii::t('app', 'Contact Us');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            <?= Yii::t('app', 'Thank you for contacting us. We will respond to you as soon as possible.') ?>
        </div>

        <?php else: ?>

        <div class="row">
            <div class="col-lg-6">
                <h2>Форма зворотного зв'язку</h2>
                <p>
                    Маєте запитання щодо наших додатків, пропозиції щодо нових функцій або потрібна підтримка? Не соромтеся заповнити форму нижче, і ми зв'яжемося з вами якомога швидше.
                </p>

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name')->textInput(['autofocus' => true])->label(Yii::t('app', 'Name')) ?>

                    <?= $form->field($model, 'email')->label(Yii::t('app', 'Email')) ?>

                    <?= $form->field($model, 'subject')->label(Yii::t('app', 'Subject')) ?>

                    <?= $form->field($model, 'body')->textarea(['rows' => 6])->label(Yii::t('app', 'Message')) ?>

                    <?= $form->field($model, 'verifyCode')->widget(Captcha::class, [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-1"></div><div class="col-lg-6">{input}</div></div>',
                        'captchaAction' => 'site/captcha',
                    ])->label(Yii::t('app', 'Verification Code')) ?>

                    <div class="form-group">
                        <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>
            </div>

            <div class="col-lg-6 mt-5 mt-lg-0">
                <h2>Наші контакти</h2>
                <p>
                    Ми завжди раді допомогти вам з будь-якими запитаннями або пропозиціями. Ось наша контактна інформація:
                </p>
                <address>
                    <strong>SimpleMapp Inc.</strong><br>
                    ТОВ «Інноваційні рішення»<br>
                    Вулиця Додатків, 123, кв. 4Б<br>
                    Техноград, Індекс 98765<br>
                    Цифрова Країна<br>
                    <br>
                    Електронна пошта: <a href="mailto:support@simplemapp.com">support@simplemapp.com</a><br>
                </address>
                <p>
                    З загальних питань, будь ласка, використовуйте форму зворотного зв'язку.
                </p>
            </div>
        </div>

    <?php endif; ?>
</div>