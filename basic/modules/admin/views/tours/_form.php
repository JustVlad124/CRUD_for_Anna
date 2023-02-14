<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\modules\admin\models\Countries;
use app\modules\admin\models\TourOperators;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\Tours $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tours-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_country')->dropDownList(
        ArrayHelper::map(Countries::find()->all(), 'id_country', 'name_country')
    ) ?>

    <?= $form->field($model, 'id_operator')->dropDownList(
        ArrayHelper::map(TourOperators::find()->all(), 'id_tour_operator', 'name_tour_operator')
    ) ?>

    <?= $form->field($model, 'name_tour')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
