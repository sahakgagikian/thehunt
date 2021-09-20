<?php

namespace common\models;

use Yii;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "applications".
 *
 * @property int $id
 * @property int|null $candidate_id
 * @property int|null $job_id
 * @property int|null $resume_id
 *
 * @property Job $job
 * @property Candidate $candidate
 */
class Application extends ActiveRecord
{

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'applications';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['candidate_id', 'job_id', 'resume_id'], 'integer'],
            [['candidate_id', 'job_id', 'resume_id'], 'required'],
            [['candidate_id'], 'exist', 'skipOnError' => true, 'targetClass' => Candidate::class, 'targetAttribute' => ['candidate_id' => 'id']],
            [['job_id'], 'exist', 'skipOnError' => true, 'targetClass' => Job::class, 'targetAttribute' => ['job_id' => 'id']],
            [['candidate_id'], 'unique', 'targetAttribute' => ['candidate_id', 'job_id'], 'message'=>'Application is already sent.'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'candidate_id' => 'Candidate ID',
            'job_id' => 'Job ID',
        ];
    }

    /**
     * Gets query for [[Job]].
     *
     * @return ActiveQuery
     */
    public function getJob()
    {
        return $this->hasOne(Job::class, ['id' => 'job_id']);
    }

    /**
     * Gets query for [[Candidate]].
     *
     * @return ActiveQuery
     */
    public function getCandidate()
    {
        return $this->hasOne(Candidate::class, ['id' => 'candidate_id']);
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
