<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\TourOperators $model */

$this->title = 'Изменить туроператора: ' . $model->id_tour_operator;
$this->params['breadcrumbs'][] = ['label' => 'Tour Operators', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_tour_operator, 'url' => ['view', 'id_tour_operator' => $model->id_tour_operator]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tour-operators-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
