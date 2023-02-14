<?php
use yii\helpers\Html;
?>

<h1>Страны</h1>
<table class="table table-bordered">
    <thead>
        <tr>
            <th class="text-center">Страна</th>
            <th class="text-center">Виза</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($countries as $country) {
        ?>
                <tr>
                    <td class="text-center"><?= $country->name_country ?></td>
                    <td class="text-center"><?= $country->visa ?></td>
                </tr>
        <?php
            }
        ?>
    </tbody>
</table>
