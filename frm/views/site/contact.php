<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\captcha\Captcha;

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
                <h2><?= Yii::t('app', 'Contact Form') ?></h2>
                <p>
                    <?= Yii::t('app', 'Do you have questions about our apps, suggestions for new features, or need support? Feel free to fill out the form below, and we will get back to you as soon as possible.') ?>
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

            <div class="col-lg-6 mt-5 mt-lg-0"> <h2><?= Yii::t('app', 'Our Contacts') ?></h2>
                <p>
                    <?= Yii::t('app', 'We are always happy to help you with any questions or suggestions. Here is our contact information:') ?>
                </p>
                <!-- <address>
                    <strong>SimpleMapp Inc.</strong><br>
                    <?= Yii::t('app', 'Innovative Solutions Ltd.') ?><br>
                    <?= Yii::t('app', '123 App Street, Apt. 4B') ?><br>
                    <?= Yii::t('app', 'Tech City, Zip 98765') ?><br>
                    <?= Yii::t('app', 'Digital Land') ?><br>
                    <br>
                    <?= Yii::t('app', 'Email') ?>: <a href="mailto:support@simplemapp.com">support@simplemapp.com</a><br>
                </address> -->
                <address>
                    <strong>SimpleMapp Inc.</strong><br>
                    Innovative Solutions Ltd.<br>
                    Email: <a href="mailto:simplemoba@gmail.com">simplemoba@gmail.com</a><br>
                </address>
                <p>
                    <?= Yii::t('app', 'For general inquiries, feel free to use the contact form.') ?>
                </p>
            </div>
        </div>

    <?php endif; ?>
</div>