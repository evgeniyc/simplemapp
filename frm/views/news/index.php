<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Управление новостями';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>
    <div class="mt-3">
        <!-- Эта кнопка теперь живет своей жизнью  -->
        <?= Html::beginForm(['/site/logout'], 'post') ?>
            <?= Html::submitButton('🚪 Выйти на сайт', [
                'class' => 'btn btn-outline-danger',
                'onclick' => 'return confirm("Уверены? Несохраненные данные будут потеряны.")'
            ]) ?>
        <?= Html::endForm() ?>
    </div>
    </p>
    <p>
        <?= Html::a('Создать новость', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'image',
                'format' => 'html',
                'value' => function($model) {
                    return Html::img($model->image, ['width' => '70px']);
                }
            ],
            [
                'label' => 'Заголовок (Текущий язык)',
                'value' => function($model) {
                    // Используем связь из модели News
                    return $model->translation ? $model->translation->title : '(нет перевода)';
                }
            ],
            'date',
            [
                'attribute' => 'status',
                'value' => function($model) {
                    return $model->status ? 'Активна' : 'Черновик';
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
