<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\Voucher $model */

$this->title = $model->id_voucher;
$this->params['breadcrumbs'][] = ['label' => 'Vouchers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="voucher-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id_voucher' => $model->id_voucher], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id_voucher' => $model->id_voucher], [
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
            'id_voucher',
            [
                'attribute' => 'id_tour',
                'value' => function($model) {
                    return $model->tour->name_tour;
                }
            ],
            'number_of_person',
            'food:ntext',
            'habitation:ntext',
            'full_price',
            'burning:ntext',
            'discount',
            'cost',
        ],
    ]) ?>

</div>
