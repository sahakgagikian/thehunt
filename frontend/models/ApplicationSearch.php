<?php

namespace frontend\models;

use common\models\Application;
use common\models\User;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use yii\db\ActiveQuery;

/**
 * JobSearch represents the model behind the search form of `common\models\Job`.
 */
class ApplicationSearch extends Application
{
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
        /* @var User $currentUser */

        $currentUser = Yii::$app->user->identity;
        $companyId = $currentUser->company->id;

        $query = Application::find();
        $query->innerJoinWith([
            'job' => function (ActiveQuery $query) use ($companyId) {
                return $query->andWhere(['jobs.company_id' => $companyId]);
            }]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        return $dataProvider;
    }
}
