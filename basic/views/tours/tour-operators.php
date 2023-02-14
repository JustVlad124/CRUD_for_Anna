<?php
use yii\helpers\Html;
?>

<h1>Туроператоры</h1>
<table class="table table-bordered">
    <thead>
    <tr>
        <th class="text-center">Название туроператора</th>
        <th class="text-center">E-mail туроператора</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($tourOperators as $operator) {
        ?>
        <tr>
            <td class="text-center"><?= $operator->name_tour_operator ?></td>
            <td class="text-center"><?= $operator->info ?></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>
