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
                <h2>Форма обратной связи</h2>
                <p>
                    У вас есть вопросы о наших приложениях, предложения по новым функциям или нужна поддержка? Не стесняйтесь заполнить форму ниже, и мы свяжемся с вами как можно скорее.
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
                <h2>Наши контакты</h2>
                <p>
                    Мы всегда рады помочь вам с любыми вопросами или предложениями. Вот наша контактная информация:
                </p>
                <address>
                    <strong>SimpleMapp Inc.</strong><br>
                    ООО «Инновационные решения»<br>
                    Улица Приложений, 123, кв. 4Б<br>
                    Техноград, Индекс 98765<br>
                    Цифровая Страна<br>
                    <br>
                    Email: <a href="mailto:support@simplemapp.com">support@simplemapp.com</a><br>
                </address>
                <p>
                    По общим вопросам, пожалуйста, используйте форму обратной связи.
                </p>
            </div>
        </div>

    <?php endif; ?>
</div>