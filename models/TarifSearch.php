<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tarif;

/**
 * TarifSearch represents the model behind the search form of `app\models\Tarif`.
 */
class TarifSearch extends Tarif
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_pdam', 'batasbawahm3', 'batasatasm3', 'tarif_per_m3'], 'integer'],
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
        $query = Tarif::find();

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
            'batasbawahm3' => $this->batasbawahm3,
            'batasatasm3' => $this->batasatasm3,
            'tarif_per_m3' => $this->tarif_per_m3,
        ]);

        return $dataProvider;
    }
}
