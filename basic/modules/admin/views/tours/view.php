<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\Tours $model */

$this->title = $model->id_tour;
$this->params['breadcrumbs'][] = ['label' => 'Tours', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tours-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id_tour' => $model->id_tour], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id_tour' => $model->id_tour], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить данную запись?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_tour',
            [
                'attribute' => 'id_country',
                'value' => function($model) {
                    return $model->country->name_country;
                }
            ],
            [
                'attribute' => 'id_operator',
                'value' => function($model) {
                    return $model->operator->name_tour_operator;
                }
            ],
            'name_tour',
            'description',
        ],
    ]) ?>

</div>
