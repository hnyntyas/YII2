<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pemakaian;

/**
 * PemakaianSearch represents the model behind the search form of `app\models\Pemakaian`.
 */
class PemakaianSearch extends Pemakaian
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_pdam', 'id_tagihan', 'pemakaian_per_m3'], 'integer'],
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
        $query = Pemakaian::find();

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
            'no_pdam' => $this->no_pdam,
            'id_tagihan' => $this->id_tagihan,
            'pemakaian_per_m3' => $this->pemakaian_per_m3,
        ]);

        return $dataProvider;
    }
}
