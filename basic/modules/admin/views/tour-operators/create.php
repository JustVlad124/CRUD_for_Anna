<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\TourOperators $model */

$this->title = 'Добавить туроператора';
$this->params['breadcrumbs'][] = ['label' => 'Tour Operators', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tour-operators-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
