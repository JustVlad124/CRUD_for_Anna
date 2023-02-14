<?php

namespace app\models;

use yii\db\ActiveRecord;

class Voucher extends ActiveRecord
{
    public function getBooking()
    {
        return $this->hasMany(Booking::class, ['id_voucher' => 'id_voucher']);
    }
    public function getTours()
    {
        return $this->hasOne(Tours::class, ['id_tour' => 'id_tour']);
    }
}