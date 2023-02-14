<?php

namespace app\models;

use yii\db\ActiveRecord;

class Tours extends ActiveRecord
{
    public function getVoucher()
    {
        return $this->hasMany(Voucher::class, ['id_tour' => 'id_tour']);
    }
    public function getCountries()
    {
        return $this->hasOne(Countries::class, ['id_country' => 'id_country']);
    }
    public function getTourOperators()
    {
        return $this->hasOne(TourOperators::class, ['id_tour_operator' => 'id_operator']);
    }
}