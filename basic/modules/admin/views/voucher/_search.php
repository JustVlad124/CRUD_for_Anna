<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\VoucherSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="voucher-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_voucher') ?>

    <?= $form->field($model, 'id_tour') ?>

    <?= $form->field($model, 'number_of_person') ?>

    <?= $form->field($model, 'food') ?>

    <?= $form->field($model, 'habitation') ?>

    <?php // echo $form->field($model, 'full_price') ?>

    <?php // echo $form->field($model, 'burning') ?>

    <?php // echo $form->field($model, 'discount') ?>

    <?php // echo $form->field($model, 'cost') ?>

    <div class="form-group">
        <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Сбросить', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
