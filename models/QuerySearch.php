<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Query;

/**
 * QuerySearch represents the model behind the search form of `app\models\Query`.
 */
class QuerySearch extends Query
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_author', 'count_symbols', 'status'], 'integer'],
            [['work_date', 'start_time', 'en_time', 'date_query'], 'safe'],
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
        $query = Query::find();

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
            'id_author' => $this->id_author,
            'work_date' => $this->work_date,
            'start_time' => $this->start_time,
            'en_time' => $this->en_time,
            'count_symbols' => $this->count_symbols,
            'status' => $this->status,
            'date_query' => $this->date_query,
        ]);

        return $dataProvider;
    }
}
