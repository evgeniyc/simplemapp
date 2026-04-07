<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\News */

$this->title = $model->translation->title ?? "Новость #{$model->id}";
$this->params['breadcrumbs'][] = ['label' => 'Новости', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить эту новость?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <div class="row">
        <div class="col-md-4">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id',
                    'date',
                    'image',
                    'status:boolean',
                    'created_at:datetime',
                    'updated_at:datetime',
                ],
            ]) ?>
        </div>
        <div class="col-md-8">
            <h3>Доступные переводы:</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Язык</th>
                        <th>Заголовок</th>
                        <th>Описание</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($model->newsTranslations as $tr): ?>
                        <tr>
                            <td><strong><?= strtoupper($tr->language) ?></strong></td>
                            <td><?= Html::encode($tr->title) ?></td>
                            <td><?= \yii\helpers\StringHelper::truncate(Html::encode($tr->description), 100) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
