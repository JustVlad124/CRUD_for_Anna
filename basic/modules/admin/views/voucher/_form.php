<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\modules\admin\models\Tours;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\Voucher $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="voucher-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_tour')->dropDownList(
        ArrayHelper::map(Tours::find()->all(), 'id_tour', 'name_tour')
    ) ?>

    <?= $form->field($model, 'number_of_person')->textInput() ?>

    <?= $form->field($model, 'food')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'habitation')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'full_price')->textInput() ?>

    <?= $form->field($model, 'burning')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'discount')->textInput() ?>

    <?= $form->field($model, 'cost')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
