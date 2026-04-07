<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Вход в панель управления';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-sm mt-5">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title mb-0"><?= Html::encode($this->title) ?></h3>
                </div>
                <div class="card-body">
                    <p>Пожалуйста, введите данные для входа:</p>

                    <?php $form = ActiveForm::begin([
                        'id' => 'login-form',
                        'fieldConfig' => [
                            'template' => "{label}\n{input}\n{error}",
                            'labelOptions' => ['class' => 'form-label'],
                            'inputOptions' => ['class' => 'form-control'],
                            'errorOptions' => ['class' => 'invalid-feedback'],
                        ],
                    ]); ?>

                    <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder' => 'Логин']) ?>

                    <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Пароль']) ?>

                    <?= $form->field($model, 'rememberMe')->checkbox([
                        'template' => "<div class=\"form-check mb-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
                        'class' => 'form-check-input',
                    ]) ?>

                    <div class="form-group d-grid">
                        <?= Html::submitButton('Войти', ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>

            <div class="mt-3 text-center text-muted">
                <small>Если вы забыли пароль, обратитесь к системному администратору.</small>
            </div>
        </div>
    </div>
</div>
