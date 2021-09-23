<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "candidates".
 *
 * @property int $id
 * @property string $username
 * @property int $user_id
 *
 * @property Resume $resumes
 */
class Candidate extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'candidates';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username'], 'required'],
            [['username'], 'string', 'max' => 64],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
        ];
    }

    public static function getCurrentCandidate()
    {
        /* @var User $currentUser */
        $currentUser = Yii::$app->getUser()->identity;

        return $currentUser->candidate;
    }

    public function getResumes()
    {
        return $this->hasMany(Resume::class, ['candidate_id' => 'id']);
    }

    public function getResumeIds()
    {
        return $this->getResumes()->select('id')->column();
    }
}
