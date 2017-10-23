<?php

namespace app\modules\admin\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Portfolio;

/**
 * PortfolioSearch represents the model behind the search form about `app\modules\admin\models\Portfolio`.
 */
class PortfolioSearch extends Portfolio
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['title_ukr', 'title_eng', 'title_rus', 'project_description_ukr', 'project_description_eng', 'project_description_rus', 'client_description_ukr', 'client_description_eng', 'client_description_rus', 'done_description_ukr', 'done_description_eng', 'done_description_rus', 'site_url', 'main_tag', 'other_tags', 'images', 'other_images'], 'safe'],
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
        $query = Portfolio::find();

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

        $query->andFilterWhere(['like', 'title_ukr', $this->title_ukr])
            ->andFilterWhere(['like', 'title_eng', $this->title_eng])
            ->andFilterWhere(['like', 'title_rus', $this->title_rus])
            ->andFilterWhere(['like', 'project_description_ukr', $this->project_description_ukr])
            ->andFilterWhere(['like', 'project_description_eng', $this->project_description_eng])
            ->andFilterWhere(['like', 'project_description_rus', $this->project_description_rus])
            ->andFilterWhere(['like', 'client_description_ukr', $this->client_description_ukr])
            ->andFilterWhere(['like', 'client_description_eng', $this->client_description_eng])
            ->andFilterWhere(['like', 'client_description_rus', $this->client_description_rus])
            ->andFilterWhere(['like', 'done_description_ukr', $this->done_description_ukr])
            ->andFilterWhere(['like', 'done_description_eng', $this->done_description_eng])
            ->andFilterWhere(['like', 'done_description_rus', $this->done_description_rus])
            ->andFilterWhere(['like', 'site_url', $this->site_url])
            ->andFilterWhere(['like', 'main_tag', $this->main_tag])
            ->andFilterWhere(['like', 'other_tags', $this->other_tags])
            ->andFilterWhere(['like', 'images', $this->images])
            ->andFilterWhere(['like', 'other_images', $this->other_images]);

        return $dataProvider;
    }
}
