<?php

use app\modules\admin\models\Tours;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\ToursSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Туры';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tours-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить тур', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_tour',
            [
                'attribute' => 'id_country',
                'value' => function($data) {
                    return $data->country->name_country;
                }
            ],
            [
                'attribute' => 'id_operator',
                'value' => function($data) {
                    return $data->operator->name_tour_operator;
                }
            ],
            'name_tour',
            'description',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Tours $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_tour' => $model->id_tour]);
                 }
            ],
        ],
    ]); ?>


</div>
