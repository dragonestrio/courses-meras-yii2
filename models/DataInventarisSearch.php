<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DataInventaris;

/**
 * DataInventarisSearch represents the model behind the search form about `app\models\DataInventaris`.
 */
class DataInventarisSearch extends DataInventaris
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_invent', 'nama_brg', 'keterangan', 'timestamp'], 'safe'],
            [['harga'], 'number'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = DataInventaris::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'harga' => $this->harga,
        ]);

        $query->andFilterWhere(['like', 'id_invent', $this->id_invent])
            ->andFilterWhere(['like', 'nama_brg', $this->nama_brg])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'timestamp', $this->timestamp]);

        return $dataProvider;
    }
}
