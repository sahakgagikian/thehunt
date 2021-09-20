<?php

namespace common\models;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "jobs".
 *
 * @property int $id
 * @property string $title
 * @property string $company_id
 * @property int $open_jobs_count
 * @property string $location
 * @property string $working_hours
 * @property ActiveQuery $categories
 *
 * @property JobsByCategory[] $jobsByCategories
 */
class Job extends ActiveRecord
{
    public $categoryIds = [];
    /**
     * @var mixed|null
     */

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jobs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'company_id', 'open_jobs_count', 'location', 'working_hours'], 'required'],
            [['open_jobs_count', 'company_id'], 'integer'],
            [['title'], 'string', 'max' => 64],
            [['location'], 'string', 'max' => 255],
            [['working_hours'], 'string', 'max' => 16],
            [['categoryIds'], 'each', 'rule' => ['exist', 'targetClass' => Category::class, 'targetAttribute' => 'id']],
            [['company_id'], 'exist', 'targetClass' => Company::class, 'targetAttribute' => 'id'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'categoryIds' => 'Categories',
            'id' => 'ID',
            'title' => 'Title',
            'company_id' => 'Company',
            'open_jobs_count' => 'Open Jobs Count',
            'location' => 'Location',
            'working_hours' => 'Working Hours',
        ];
    }

    /**
     * Gets query for [[JobsByCategory]].
     *
     * @return ActiveQuery
     */
    public function getJobsByCategory()
    {
        return $this->hasMany(JobsByCategory::class, ['job_id' => 'id']);
    }

    /**
     * Gets query for [[Category]].
     *
     * @return ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasMany(Category::class, ['id' => 'category_id'])
            ->via('jobsByCategory');
    }

    /**
     * Gets query for [[Company]].
     *
     * @return ActiveQuery
     */
    public function getCompany()
    {
        return $this->hasOne(Company::class, ['id' => 'company_id']);
    }
}
