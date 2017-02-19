<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\SuppliesNeeded;

/**
 * SuppliesNeededSearch represents the model behind the search form about `common\models\SuppliesNeeded`.
 */
class SuppliesNeededSearch extends SuppliesNeeded
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'suggested_supplies_id'], 'integer'],
            [['requested_supplies', 'quantity', 'destination'], 'safe'],
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
        $query = SuppliesNeeded::find();

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
            'suggested_supplies_id' => $this->suggested_supplies_id,
        ]);

        $query->andFilterWhere(['like', 'requested_supplies', $this->requested_supplies])
            ->andFilterWhere(['like', 'quantity', $this->quantity])
            ->andFilterWhere(['like', 'destination', $this->destination]);

        return $dataProvider;
    }
}
