<?php

namespace app\controllers;

use app\models\Booking;
use app\models\Countries;
use app\models\SearchTour;
use app\models\TourOperators;
use app\models\Tours;
use app\models\Voucher;
use yii\db\Query;
use yii\web\Controller;

class ToursController extends Controller
{
    public function actionCountries()
    {
        $countries = Countries::find()
            ->with()
            ->all();

        return $this->render("countries", ["countries" => $countries]);
    }
    public function actionTourOperators()
    {
        $tourOperators = TourOperators::find()
            ->with()
            ->all();

        return $this->render("tour-operators", ['tourOperators' => $tourOperators]);
    }
    public function actionTours()
    {
        $tours = Tours::find()
            ->with('countries')
            ->with('tourOperators')
            ->all();

        return $this->render('tours', ['tours' => $tours]);
    }
    public function actionVoucher()
    {
        $vouchers = Voucher::find()
            ->with('tours')
            ->all();

        return $this->render('voucher', ['vouchers' => $vouchers]);
    }
    public function actionBooking()
    {
        $orders = Booking::find()
            ->with()
            ->all();

        return $this->render('booking', ['orders' => $orders]);
    }
    public function actionSearch()
    {
        $model = new SearchTour();
        if ($model->load(\Yii::$app->request->post())) {
            $countryName = $model->countryName;

            $countryCode = (new Query())->select('id_country')->from('countries')->where(['like', 'name_country', $countryName]);

            $tours = Tours::find()
                ->where(['id_country' => $countryCode])
                ->with('countries')
                ->with('tourOperators')
                ->all();

            return $this->render('search', compact('tours', 'countryName', 'model'));
        } else {
            return $this->render('search', ['model' => $model]);
        }
    }
}


















