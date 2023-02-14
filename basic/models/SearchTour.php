<?php

namespace app\models;

use yii\base\Model;

class SearchTour extends Model
{
    public $countryName;

    public function rules()
    {
        return [
            ['countryName', 'required'],
            ['countryName', 'trim'],
            ['countryName', 'string']
        ];
    }
}