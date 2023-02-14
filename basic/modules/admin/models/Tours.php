<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "tours".
 *
 * @property int $id_tour
 * @property int $id_country
 * @property int $id_operator
 * @property string $name_tour
 * @property string $description
 *
 * @property Countries $country
 * @property TourOperators $operator
 * @property Voucher[] $vouchers
 */
class Tours extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tours';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_country', 'id_operator', 'name_tour', 'description'], 'required'],
            [['id_country', 'id_operator'], 'integer'],
            [['name_tour'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 100],
            [['id_country'], 'exist', 'skipOnError' => true, 'targetClass' => Countries::class, 'targetAttribute' => ['id_country' => 'id_country']],
            [['id_operator'], 'exist', 'skipOnError' => true, 'targetClass' => TourOperators::class, 'targetAttribute' => ['id_operator' => 'id_tour_operator']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_tour' => 'ID',
            'id_country' => 'Страна',
            'id_operator' => 'Туроператор',
            'name_tour' => 'Название тура',
            'description' => 'Описание',
        ];
    }

    /**
     * Gets query for [[Country]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCountry()
    {
        return $this->hasOne(Countries::class, ['id_country' => 'id_country']);
    }

    /**
     * Gets query for [[Operator]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperator()
    {
        return $this->hasOne(TourOperators::class, ['id_tour_operator' => 'id_operator']);
    }

    /**
     * Gets query for [[Vouchers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVouchers()
    {
        return $this->hasMany(Voucher::class, ['id_tour' => 'id_tour']);
    }
}
