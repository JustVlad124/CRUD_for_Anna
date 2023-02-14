<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\TourOperators $model */

$this->title = $model->id_tour_operator;
$this->params['breadcrumbs'][] = ['label' => 'Tour Operators', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tour-operators-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id_tour_operator' => $model->id_tour_operator], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id_tour_operator' => $model->id_tour_operator], [
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
            'id_tour_operator',
            'name_tour_operator',
            'info',
        ],
    ]) ?>

</div>
