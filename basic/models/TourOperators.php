<?php

namespace app\models;

use yii\db\ActiveRecord;

class TourOperators extends ActiveRecord
{
    public static function tableName()
    {
        return 'tour_operators';
    }
    public function getTours()
    {
        return $this->hasMany(Tours::class, ['id_operator' => 'id_tour_operator']);
    }
}