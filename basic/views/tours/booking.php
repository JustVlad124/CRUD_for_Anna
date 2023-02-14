<?php
use yii\helpers\Html;
?>

<h1>Заказы</h1>
<table class="table table-bordered">
    <thead>
    <tr>
        <th class="text-center">ID путевки</th>
        <th class="text-center">Заказчик</th>
        <th class="text-center">Оплата</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($orders as $order) {
        ?>
        <tr>
            <td class="text-center"><?= $order->id_voucher ?></td>
            <td class="text-center"><?= $order->client ?></td>
            <td class="text-center"><?= $order->payment ?></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>

