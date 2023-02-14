<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Tours;

/**
 * ToursSearch represents the model behind the search form of `app\modules\admin\models\Tours`.
 */
class ToursSearch extends Tours
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_tour', 'id_country', 'id_operator'], 'integer'],
            [['name_tour', 'description'], 'safe'],
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
        $query = Tours::find();

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
            'id_tour' => $this->id_tour,
            'id_country' => $this->id_country,
            'id_operator' => $this->id_operator,
        ]);

        $query->andFilterWhere(['like', 'name_tour', $this->name_tour])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
