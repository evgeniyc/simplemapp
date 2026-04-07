<?php
/* @var $form yii\widgets\ActiveForm */
/* @var $translation app\models\NewsTranslation */
/* @var $lang string */
?>

<div class="pt-3">
    <?= $form->field($translation, "[$lang]title")->textInput([
        'maxlength' => true,
        'placeholder' => "Заголовок на языке $lang"
    ]) ?>

    <?= $form->field($translation, "[$lang]description")->textarea([
        'rows' => 6,
        'placeholder' => "Описание на языке $lang"
    ]) ?>

    <?= $form->field($translation, "[$lang]language")->hiddenInput()->label(false) ?>
</div>
