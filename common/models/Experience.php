<?php

namespace common\models;

use Yii;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;
use yii\web\UploadedFile;

/**
 * This is the model class for table "experiences".
 *
 * @property int $id
 * @property int $resume_id
 * @property string $company_name
 * @property string $title
 * @property string $year_from
 * @property string $year_to
 * @property string|null $description
 *
 * @property Resume $resume
 */
class Experience extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'experiences';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['resume_id', 'company_name', 'title', 'year_from', 'year_to'], 'required'],
            [['resume_id'], 'integer'],
            [['year_from', 'year_to'], 'safe'],
            [['description'], 'string'],
            [['company_name', 'title'], 'string', 'max' => 255],
            [['resume_id'], 'exist', 'skipOnError' => true, 'targetClass' => Resume::class, 'targetAttribute' => ['resume_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'resume_id' => 'Resume ID',
            'company_name' => 'Company Name',
            'title' => 'Title',
            'year_from' => 'Year From',
            'year_to' => 'Year To',
            'description' => 'Description',
        ];
    }

    /**
     * Gets query for [[Resume]].
     *
     * @return ActiveQuery
     */
    public function getResume()
    {
        return $this->hasOne(Resume::class, ['id' => 'resume_id']);
    }
}
