<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Job;

/**
 * JobSearch represents the model behind the search form of `common\models\Job`.
 */
class JobSearch extends Job
{
    public $categoryId;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'open_jobs_count'], 'integer'],
            [['title', 'company_id', 'location', 'working_hours', 'categoryId'], 'safe'],
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
        $query = Job::find();

        // add conditions that should always apply here

        $query->joinWith(['jobsByCategory']);
        $query->joinWith(['company']);

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
            $this->tableName() . '.id' => $this->id,
            'open_jobs_count' => $this->open_jobs_count,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'company_id', $this->company_id])
            ->andFilterWhere(['like', 'company.id', $this->company_id])
            ->andFilterWhere(['like', 'location', $this->location])
            ->andFilterWhere(['like', 'working_hours', $this->working_hours])
            ->andFilterWhere(['like', 'jobs_by_categories.category_id', $this->categoryId]);

        return $dataProvider;
    }
}
