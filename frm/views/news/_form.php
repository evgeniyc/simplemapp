<?php
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Tabs;

/* @var $this yii\web\View */
/* @var $model app\models\News */
/* @var $translations app\models\NewsTranslation[] */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin([
        'id' => 'news-form',
        'enableClientValidation' => true,
    ]); ?>

    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-light fw-bold">Основные данные</div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4"><?= $form->field($model, 'date')->textInput(['placeholder' => 'дд-мм-гггг']) ?></div>
                <div class="col-md-6"><?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?></div>
                <div class="col-md-2">
                    <label class="form-label">&nbsp;</label>
                    <?= $form->field($model, 'status')->checkbox(['uncheck' => 0, 'value' => 1]) ?>
                </div>
            </div>
        </div>
    </div>

    <h4 class="mb-3">Контент</h4>

    <?php
    $items = [];
    $isFirst = true;
    foreach ($translations as $lang => $translation) {
        $items[] = [
            'label' => strtoupper(substr($lang, 0, 2)),
            'content' => '<div class="mt-3">' . $this->render('_translation_fields', [
                'form' => $form,
                'translation' => $translation,
                'lang' => $lang,
            ]) . '</div>',
            'active' => $isFirst,
        ];
        $isFirst = false;
    }
    echo Tabs::widget(['items' => $items, 'navType' => 'nav-tabs fw-bold']);
    ?>

    <div class="mt-4 pt-3 border-top">
        <?= Html::submitButton('💾 Сохранить изменения', ['class' => 'btn btn-success px-4']) ?>
    </div>

    <?php ActiveForm::end(); ?> <!-- ФОРМА ЗАКРЫТА ПОЛНОСТЬЮ -->

    <div class="mt-3">
        <!-- Эта кнопка теперь живет своей жизнью  -->
        <?= Html::beginForm(['/site/logout'], 'post') ?>
            <?= Html::submitButton('🚪 Выйти на сайт', [
                'class' => 'btn btn-outline-danger',
                'onclick' => 'return confirm("Уверены? Несохраненные данные будут потеряны.")'
            ]) ?>
        <?= Html::endForm() ?>
    </div>
</div>
