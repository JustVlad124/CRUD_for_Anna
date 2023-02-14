<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "booking".
 *
 * @property int $id_booking
 * @property int $id_voucher
 * @property string $client
 * @property string $payment
 *
 * @property Voucher $voucher
 */
class Booking extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'booking';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_voucher', 'client', 'payment'], 'required'],
            [['id_voucher'], 'integer'],
            [['payment'], 'string'],
            [['client'], 'string', 'max' => 30],
            [['id_voucher'], 'exist', 'skipOnError' => true, 'targetClass' => Voucher::class, 'targetAttribute' => ['id_voucher' => 'id_voucher']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_booking' => 'ID',
            'id_voucher' => 'Путевки',
            'client' => 'Заказчик',
            'payment' => 'Оплата',
        ];
    }

    /**
     * Gets query for [[Voucher]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVoucher()
    {
        return $this->hasOne(Voucher::class, ['id_voucher' => 'id_voucher']);
    }
}
