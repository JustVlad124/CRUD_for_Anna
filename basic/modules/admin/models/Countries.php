<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "countries".
 *
 * @property int $id_country
 * @property string $name_country
 * @property string $visa
 *
 * @property Tours[] $tours
 */
class Countries extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'countries';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_country', 'visa'], 'required'],
            [['name_country'], 'string', 'max' => 30],
            [['visa'], 'string', 'max' => 3],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_country' => 'ID',
            'name_country' => 'Страна',
            'visa' => 'Виза',
        ];
    }

    /**
     * Gets query for [[Tours]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTours()
    {
        return $this->hasMany(Tours::class, ['id_country' => 'id_country']);
    }
}
