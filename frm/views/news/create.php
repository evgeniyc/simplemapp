<?php
use yii\helpers\Html;

$this->title = 'Создать новость';
$this->params['breadcrumbs'][] = ['label' => 'Новости', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-create">
    <h1><?= Html::encode($this->title) ?></h1>
    <?= $this->render('_form', [
        'model' => $model,
        'translations' => $translations,
    ]) ?>
</div>
