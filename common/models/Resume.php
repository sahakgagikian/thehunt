<?php

namespace common\models;

use Yii;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "resumes".
 *
 * @property int $id
 * @property int $candidate_id
 * @property string $candidate_name
 * @property string $candidate_email
 * @property string $candidate_location
 * @property string|null $candidate_website
 * @property float|null $candidate_desired_salary
 * @property int $candidate_age
 * @property string|null $cover_image
 * @property string|null $educations_cover_image
 * @property string|null $experiences_cover_image
 * @property string $update_date_and_time
 *
 * @property Candidate $candidate
 * @property Education $educations
 * @property Experience $experiences
 * @property Skill $skills
 */
class Resume extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'resumes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['candidate_id', 'candidate_name', 'candidate_email', 'candidate_profession_title', 'candidate_location', 'candidate_age', 'update_date_and_time'], 'required'],
            [['candidate_id', 'candidate_age'], 'integer'],
            [['candidate_age'], 'integer'],
            [['candidate_desired_salary'], 'number'],
            [['candidate_name', 'candidate_email', 'candidate_location', 'candidate_website', 'update_date_and_time'], 'string', 'max' => 255],
            [['candidate_id'], 'exist', 'skipOnError' => true, 'targetClass' => Candidate::class, 'targetAttribute' => ['candidate_id' => 'id']],
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
            'candidate_name' => 'Candidate Name',
            'candidate_email' => 'Candidate Email',
            'candidate_location' => 'Candidate Location',
            'candidate_website' => 'Candidate Website',
            'candidate_desired_salary' => 'Candidate Desired Salary',
            'candidate_age' => 'Candidate Age',
            'cover_image' => 'Cover Image',
            'educations_cover_image' => 'Educations Cover Image',
            'experiences_cover_image' => 'Experiences Cover Image',
            'update_date_and_time' => 'Updated on',
        ];
    }

    public function getCoverImagePath()
    {
        return '/' . $this->cover_image;
    }

    public function upload()
    {
        if ($this->validate()) {
            $path = 'images/' . uniqid('cover_image') . '.' . $this->cover_image->extension;
            $this->cover_image->saveAs('@frontend/web/' . $path);
            $this->cover_image = $path;
        } else {
            return false;
        }
    }

    public function getEducationCoverImagePath()
    {
        return '/' . $this->educations_cover_image;
    }

    public function uploadEducation(): bool
    {
        if ($this->validate()) {
            $path = 'images/' . uniqid('cover_logo') . '.' . $this->educations_cover_image->extension;
            if ($this->educations_cover_image->saveAs('@frontend/web/' . $path)) {
                $this->educations_cover_image = $path;
                return true;
            }
        }

        return false;
    }

    public function getExperienceCoverImagePath()
    {
        return '/' . $this->experiences_cover_image;
    }

    public function uploadExperience(): bool
    {
        if ($this->validate()) {
            $path = 'images/' . uniqid('cover_logo') . '.' . $this->experiences_cover_image->extension;
            if ($this->experiences_cover_image->saveAs('@frontend/web/' . $path)) {
                $this->experiences_cover_image = $path;
                return true;
            }
        }

        return false;
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

    public static function getCurrentResume($id)
    {
        return Resume::find()->with(['educations', 'experiences', 'skills'])->where(['id' => $id])->one();
    }

    public static function getResume($id, $role)
    {
        /* @var User $currentUser */
        /* @var Resume $currentResume */

        $currentUser = Yii::$app->getUser()->identity;
        $currentResume = self::getCurrentResume($id);

        if (!$currentResume || !in_array($currentResume->id, $currentUser->{$role}->resumeIds)) {
            return false;
        }

        return $currentResume;
    }

    /**
     * Gets query for [[Applications]].
     *
     * @return ActiveQuery
     */
    public function getApplications()
    {
        return $this->hasMany(Application::class, ['id' => 'application_id']);
    }

    /**
     * Gets query for [[Educations]].
     *
     * @return ActiveQuery
     */
    public function getEducations()
    {
        return $this->hasMany(Education::class, ['resume_id' => 'id']);
    }

    /**
     * Gets query for [[Experiences]].
     *
     * @return ActiveQuery
     */
    public function getExperiences()
    {
        return $this->hasMany(Experience::class, ['resume_id' => 'id']);
    }

    /**
     * Gets query for [[Skills]].
     *
     * @return ActiveQuery
     */
    public function getSkills()
    {
        return $this->hasMany(Skill::class, ['resume_id' => 'id']);
    }
}
