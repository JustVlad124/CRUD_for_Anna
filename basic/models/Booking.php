<?php

namespace app\models;

use yii\db\ActiveRecord;

class Booking extends ActiveRecord
{
    public function getVoucher()
    {
        return $this->hasOne(Voucher::class, ['id_voucher' => 'id_voucher']);
    }
}