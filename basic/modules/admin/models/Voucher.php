<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "voucher".
 *
 * @property int $id_voucher
 * @property int $id_tour
 * @property int $number_of_person
 * @property string $food
 * @property string $habitation
 * @property float $full_price
 * @property string $burning
 * @property int $discount
 * @property float $cost
 *
 * @property Booking[] $bookings
 * @property Tours $tour
 */
class Voucher extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'voucher';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_tour', 'number_of_person', 'food', 'habitation', 'full_price', 'burning', 'discount', 'cost'], 'required'],
            [['id_tour', 'number_of_person', 'discount'], 'integer'],
            [['food', 'habitation', 'burning'], 'string'],
            [['full_price', 'cost'], 'number'],
            [['id_tour'], 'exist', 'skipOnError' => true, 'targetClass' => Tours::class, 'targetAttribute' => ['id_tour' => 'id_tour']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_voucher' => 'ID',
            'id_tour' => 'Название тура',
            'number_of_person' => 'Количество человек',
            'food' => 'Питание',
            'habitation' => 'Проживание',
            'full_price' => 'Полная стоимость',
            'burning' => '"Горящая"',
            'discount' => 'Скидка',
            'cost' => 'Итоговая стоимость',
        ];
    }

    /**
     * Gets query for [[Bookings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBookings()
    {
        return $this->hasMany(Booking::class, ['id_voucher' => 'id_voucher']);
    }

    /**
     * Gets query for [[Tour]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTour()
    {
        return $this->hasOne(Tours::class, ['id_tour' => 'id_tour']);
    }
}
