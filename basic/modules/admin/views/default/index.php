<?php
    use yii\helpers\Html;

    echo Html::a('Страны', ['/admin/countries/index'], ['class' => 'btn btn-primary', 'style' => 'margin: 10px']);
    echo Html::a('Туроператоры', ['/admin/tour-operators/index'], ['class' => 'btn btn-primary']);
    echo Html::a('Туры', ['/admin/tours/index'], ['class' => 'btn btn-primary', 'style' => 'margin: 10px']);
    echo Html::a('Путевки', ['/admin/voucher/index'], ['class' => 'btn btn-primary']);
    echo Html::a('Заказы', ['/admin/booking/index'], ['class' => 'btn btn-primary', 'style' => 'margin: 10px']);
?>


