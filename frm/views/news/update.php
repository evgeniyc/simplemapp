<?php
use yii\helpers\Html;

$this->title = 'Редактировать: ' . ($model->translation->title ?? $model->id);
$this->params['breadcrumbs'][] = ['label' => 'Новости', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="news-update">
    <h1><?= Html::encode($this->title) ?></h1>
    <?= $this->render('_form', [
        'model' => $model,
        'translations' => $translations,
    ]) ?>
</div>
