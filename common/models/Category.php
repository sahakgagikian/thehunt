<?php

namespace common\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "categories".
 *
 * @property int $id
 * @property string $title
 * @property string|null $image
 * @property int|null $jobs_count
 * @property int|null $sort
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Category extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */

    public static function tableName()
    {
        return 'categories';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'image'], 'required'],
            [['jobs_count', 'sort'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['title'], 'string', 'max' => 64],
            [['image'], 'image', 'skipOnEmpty' => true],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'imagePath' => 'Image',
            'jobs_count' => 'Jobs Count',
            'sort' => 'Sort',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getImagePath()
    {
        return '/backend/web/' . $this->image;
    }

    public function upload()
    {
        if ($this->validate()) {
            $path = 'images/' . uniqid('category_image') . '.' . $this->image->extension;
            $this->image->saveAs('@backend/web/' . $path);
            $this->image = $path;
            return true;
        } else {
            return false;
        }
    }

    /**
     * Gets query for [[JobsByCategory]].
     *
     * @return ActiveQuery
     */
    public function getJobsByCategory()
    {
        return $this->hasMany(JobsByCategory::class, ['category_id' => 'id']);
    }

    /**
     * Gets query for [[Jobs]].
     *
     * @return ActiveQuery
     */
    public function getJobs()
    {
        return $this->hasMany(Job::class, ['id' => 'job_id'])
            ->via('jobsByCategory');
    }

    /**
     * Gets query for [[CategoryJobsCount]].
     *
     * @return ActiveQuery
     */
    public function getCategoryJobsCount()
    {
        return $this->getJobs()->count();
    }

}