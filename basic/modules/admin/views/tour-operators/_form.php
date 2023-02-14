<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\TourOperators $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tour-operators-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_tour_operator')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'info')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
