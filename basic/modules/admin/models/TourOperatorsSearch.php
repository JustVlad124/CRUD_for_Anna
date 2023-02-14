<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\TourOperators;

/**
 * TourOperatorsSearch represents the model behind the search form of `app\modules\admin\models\TourOperators`.
 */
class TourOperatorsSearch extends TourOperators
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_tour_operator'], 'integer'],
            [['name_tour_operator', 'info'], 'safe'],
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
        $query = TourOperators::find();

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
            'id_tour_operator' => $this->id_tour_operator,
        ]);

        $query->andFilterWhere(['like', 'name_tour_operator', $this->name_tour_operator])
            ->andFilterWhere(['like', 'info', $this->info]);

        return $dataProvider;
    }
}
