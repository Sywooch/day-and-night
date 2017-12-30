<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Mission;

/**
 * MissionSearch represents the model behind the search form of `app\models\Mission`.
 */
class MissionSearch extends Mission
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_topic', 'id_author', 'status'], 'integer'],
            [['article_name', 'uniqueness', 'develop_theme', 'empty_words', 'keywords', 'comment_view', 'date_creature'], 'safe'],
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
        $query = Mission::find();

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
            'id_topic' => $this->id_topic,
            'id_author' => $this->id_author,
            'status' => $this->status,
            'date_creature' => $this->date_creature,
        ]);

        $query->andFilterWhere(['like', 'article_name', $this->article_name])
            ->andFilterWhere(['like', 'uniqueness', $this->uniqueness])
            ->andFilterWhere(['like', 'develop_theme', $this->develop_theme])
            ->andFilterWhere(['like', 'empty_words', $this->empty_words])
            ->andFilterWhere(['like', 'keywords', $this->keywords])
            ->andFilterWhere(['like', 'comment_view', $this->comment_view]);

        return $dataProvider;
    }
}
