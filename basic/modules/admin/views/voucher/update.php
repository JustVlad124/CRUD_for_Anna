<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\Voucher $model */

$this->title = 'Изменить путевку: ' . $model->id_voucher;
$this->params['breadcrumbs'][] = ['label' => 'Vouchers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_voucher, 'url' => ['view', 'id_voucher' => $model->id_voucher]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="voucher-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
