<?php

namespace app\modules\blog\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\blog\models\Articles;

/**
 * ArticlestSearch represents the model behind the search form about `app\modules\blog\models\Articles`.
 */
class ArticlesSearch extends Articles
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'views', 'public'], 'integer'],
            [['title_ukr', 'title_eng', 'title_rus', 'description_ukr', 'description_eng', 'description_rus', 'text_ukr', 'text_eng', 'text_rus', 'site_url', 'main_tag', 'other_tags', 'images', 'preview_images'], 'safe'],
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
        $query = Articles::find();

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
            'views' => $this->views,
            'public' => $this->public,
        ]);

        $query->andFilterWhere(['like', 'title_ukr', $this->title_ukr])
            ->andFilterWhere(['like', 'title_eng', $this->title_eng])
            ->andFilterWhere(['like', 'title_rus', $this->title_rus])
            ->andFilterWhere(['like', 'description_ukr', $this->description_ukr])
            ->andFilterWhere(['like', 'description_eng', $this->description_eng])
            ->andFilterWhere(['like', 'description_rus', $this->description_rus])
            ->andFilterWhere(['like', 'text_ukr', $this->text_ukr])
            ->andFilterWhere(['like', 'text_eng', $this->text_eng])
            ->andFilterWhere(['like', 'text_rus', $this->text_rus])
            ->andFilterWhere(['like', 'site_url', $this->site_url])
            ->andFilterWhere(['like', 'main_tag', $this->main_tag])
            ->andFilterWhere(['like', 'other_tags', $this->other_tags])
            ->andFilterWhere(['like', 'images', $this->images])
            ->andFilterWhere(['like', 'preview_images', $this->preview_images]);

        return $dataProvider;
    }
}
