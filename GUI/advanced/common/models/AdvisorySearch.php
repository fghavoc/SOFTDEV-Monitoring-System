<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Advisory;

/**
 * AdvisorySearch represents the model behind the search form about `common\models\Advisory`.
 */
class AdvisorySearch extends Advisory
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'ndrrmc_id'], 'integer'],
            [['date', 'subject', 'disaster_category'], 'safe'],
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
        $query = Advisory::find();

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
            'ndrrmc_id' => $this->ndrrmc_id,
        ]);

        $query->andFilterWhere(['like', 'date', $this->date])
            ->andFilterWhere(['like', 'subject', $this->subject])
            ->andFilterWhere(['like', 'disaster_category', $this->disaster_category]);

        return $dataProvider;
    }
}
