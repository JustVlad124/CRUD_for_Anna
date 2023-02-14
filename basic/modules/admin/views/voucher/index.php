<?php

use app\modules\admin\models\Voucher;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\VoucherSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Путевки';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="voucher-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить путевку', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_voucher',
            [
                'attribute' => 'id_tour',
                'value' => function($data) {
                    return $data->tour->name_tour;
                }
            ],
            'number_of_person',
            'food:ntext',
            'habitation:ntext',
            'full_price',
            'burning:ntext',
            'discount',
            'cost',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Voucher $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_voucher' => $model->id_voucher]);
                 }
            ],
        ],
    ]); ?>


</div>
