<?php
use yii\helpers\Html;
?>

<h1>Путевки</h1>
<table class="table table-bordered">
    <thead>
    <tr>
        <th class="text-center">Название тура</th>
        <th class="text-center">Количество человек</th>
        <th class="text-center">Питание</th>
        <th class="text-center">Проживание</th>
        <th class="text-center">Полная стоимость</th>
        <th class="text-center">Горящие билеты</th>
        <th class="text-center">Скидка</th>
        <th class="text-center">Итоговая стоимость</th>
    </tr>
    </thead>
    <tbody>
        <?php
            foreach ($vouchers as $voucher) {
        ?>
                <tr>
                    <td class="text-center"><?= $voucher->tours->name_tour ?></td>
                    <td class="text-center"><?= $voucher->number_of_person ?></td>
                    <td class="text-center"><?= $voucher->food ?></td>
                    <td class="text-center"><?= $voucher->habitation ?></td>
                    <td class="text-center"><?= $voucher->full_price ?></td>
                    <td class="text-center"><?= $voucher->burning ?></td>
                    <td class="text-center"><?= $voucher->discount ?></td>
                    <td class="text-center"><?= $voucher->cost ?></td>
                </tr>
        <?php
            }
        ?>
    </tbody>
</table>
