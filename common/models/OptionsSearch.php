<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Options;

/**
 * OptionsSearch represents the model behind the search form about `common\models\Options`.
 */
class OptionsSearch extends Options
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['title', 'answerA', 'answerB', 'answerC', 'answerD', 'answer'], 'safe'],
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
        $query = Options::find();

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
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'answerA', $this->answerA])
            ->andFilterWhere(['like', 'answerB', $this->answerB])
            ->andFilterWhere(['like', 'answerC', $this->answerC])
            ->andFilterWhere(['like', 'answerD', $this->answerD])
            ->andFilterWhere(['like', 'answer', $this->answer]);

        return $dataProvider;
    }
}
