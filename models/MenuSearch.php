<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Menu;

/**
 * MenuSearch represents the model behind the search form about `app\models\Menu`.
 */
class MenuSearch extends Menu
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_menu'], 'integer'],
            [['nameMenu', 'activeMenu', 'actionMenu', 'topBottom', 'menuImg'], 'safe'],
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
        $query = Menu::find();

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
            'id_menu' => $this->id_menu,
        ]);

        $query->andFilterWhere(['like', 'nameMenu', $this->nameMenu])
            ->andFilterWhere(['like', 'activeMenu', $this->activeMenu])
            ->andFilterWhere(['like', 'actionMenu', $this->actionMenu])
            ->andFilterWhere(['like', 'topBottom', $this->topBottom])
            ->andFilterWhere(['like', 'menuImg', $this->menuImg]);

        return $dataProvider;
    }
}
