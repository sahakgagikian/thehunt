<?php

namespace common\models;

use Yii;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;
use yii\web\UploadedFile;

/**
 * This is the model class for table "educations".
 *
 * @property int $id
 * @property int $resume_id
 * @property string $degree
 * @property string $field_of_study
 * @property string $educational_institution
 * @property int $year_from
 * @property int $year_to
 * @property string|null $description
 *
 * @property Resume $resume
 */
class Education extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'educations';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['resume_id', 'degree', 'field_of_study', 'educational_institution', 'year_from', 'year_to'], 'required'],
            [['resume_id', 'year_from', 'year_to'], 'integer'],
            [['description'], 'string'],
            [['degree', 'field_of_study', 'educational_institution'], 'string', 'max' => 255],
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
            'degree' => 'Degree',
            'field_of_study' => 'Field Of Study',
            'educational_institution' => 'Educational Institution',
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
