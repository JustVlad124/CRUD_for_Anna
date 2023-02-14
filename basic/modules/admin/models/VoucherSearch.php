<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Voucher;

/**
 * VoucherSearch represents the model behind the search form of `app\modules\admin\models\Voucher`.
 */
class VoucherSearch extends Voucher
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_voucher', 'id_tour', 'number_of_person', 'discount'], 'integer'],
            [['food', 'habitation', 'burning'], 'safe'],
            [['full_price', 'cost'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Voucher::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_voucher' => $this->id_voucher,
            'id_tour' => $this->id_tour,
            'number_of_person' => $this->number_of_person,
            'full_price' => $this->full_price,
            'discount' => $this->discount,
            'cost' => $this->cost,
        ]);

        $query->andFilterWhere(['like', 'food', $this->food])
            ->andFilterWhere(['like', 'habitation', $this->habitation])
            ->andFilterWhere(['like', 'burning', $this->burning]);

        return $dataProvider;
    }
}
