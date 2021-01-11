<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\LaporanKunjungan;

/**
 * LaporanKunjunganSearch represents the model behind the search form of `app\models\LaporanKunjungan`.
 */
class LaporanKunjunganSearch extends LaporanKunjungan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_user', 'kategori_akw', 'negara', 'provinsi', 'pria', 'wanita', 'jumlah'], 'integer'],
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
        $query = LaporanKunjungan::find();

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
            'id' => $this->id,
            'id_user' => $this->id_user,
            'kategori_akw' => $this->kategori_akw,
            'negara' => $this->negara,
            'provinsi' => $this->provinsi,
            'pria' => $this->pria,
            'wanita' => $this->wanita,
            'jumlah' => $this->jumlah,
        ]);

        return $dataProvider;
    }
}
