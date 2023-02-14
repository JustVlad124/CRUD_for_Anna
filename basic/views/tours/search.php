<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'countryName')->label('Введите страну для поиска'); ?></br>
    <?= Html::submitButton('Поиск', ['class' => 'btn btn-success']); ?></br></br>
<?php ActiveForm::end(); ?>

<?php
    if ($model->load(Yii::$app->request->post()) && !empty($tours)) {
?>
        <h1>Найденные туры по указанной стране</h1>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th class="text-center">Название тура</th>
                <th class="text-center">Страна</th>
                <th class="text-center">Туроператор</th>
                <th class="text-center">Описание</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($tours as $tour) {
                ?>
                <tr>
                    <td class="text-center"><?= $tour->name_tour ?></td>
                    <td class="text-center"><?= $tour->countries->name_country ?></td>
                    <td class="text-center"><?= $tour->tourOperators->name_tour_operator ?></td>
                    <td class="text-center"><?= $tour->description ?></td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
<?php
    } else {
        print "<p>Нет данных</p>";
    }
?>