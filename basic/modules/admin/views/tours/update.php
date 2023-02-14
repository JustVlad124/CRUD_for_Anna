<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\Tours $model */

$this->title = 'Изменить тур: ' . $model->id_tour;
$this->params['breadcrumbs'][] = ['label' => 'Tours', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_tour, 'url' => ['view', 'id_tour' => $model->id_tour]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tours-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
