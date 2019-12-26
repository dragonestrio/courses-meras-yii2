<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DataKas;

/**
 * DataKasSearch represents the model behind the search form of `app\models\DataKas`.
 */
class DataKasSearch extends DataKas
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kas'], 'integer'],
            [['nim', 'tgl_setor'], 'safe'],
            [['setor'], 'number'],
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
        $query = DataKas::find();

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
            'id_kas' => $this->id_kas,
            'setor' => $this->setor,
            'tgl_setor' => $this->tgl_setor,
        ]);

        $query->andFilterWhere(['like', 'nim', $this->nim]);

        return $dataProvider;
    }
}
