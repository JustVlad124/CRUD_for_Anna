<?php

use app\modules\admin\models\TourOperators;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\TourOperatorsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Туроператоры';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tour-operators-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить туроператора', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_tour_operator',
            'name_tour_operator',
            'info',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TourOperators $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_tour_operator' => $model->id_tour_operator]);
                 }
            ],
        ],
    ]); ?>


</div>
