<?php

namespace app\models;

use yii\db\ActiveRecord;

class Countries extends ActiveRecord
{
    public function getTours()
    {
        return $this->hasMany(Tours::class, ["id_country" => "id_country"]);
    }
}