<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "tour_operators".
 *
 * @property int $id_tour_operator
 * @property string $name_tour_operator
 * @property string $info
 *
 * @property Tours[] $tours
 */
class TourOperators extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tour_operators';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_tour_operator', 'info'], 'required'],
            [['name_tour_operator', 'info'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_tour_operator' => 'ID',
            'name_tour_operator' => 'Название туроператора',
            'info' => 'Контактная информация',
        ];
    }

    /**
     * Gets query for [[Tours]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTours()
    {
        return $this->hasMany(Tours::class, ['id_operator' => 'id_tour_operator']);
    }
}
