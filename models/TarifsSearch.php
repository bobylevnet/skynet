<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tarifs;

/**
 * TarifsSearch represents the model behind the search form about `app\models\Tarifs`.
 */
class TarifsSearch extends Tarifs
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['nametarif', 'speedtarif', 'pricetarif', 'typetarif'], 'safe'],
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
        $query = Tarifs::find();

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

        $query->andFilterWhere(['like', 'nametarif', $this->nametarif])
            ->andFilterWhere(['like', 'speedtarif', $this->speedtarif])
            ->andFilterWhere(['like', 'pricetarif', $this->pricetarif])
            ->andFilterWhere(['like', 'typeatrif', $this->typetarif]);

        return $dataProvider;
    }
}
