<?php

namespace common\models;

use Yii;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "companies".
 *
 * @property int $id
 * @property string $username
 * @property string $logo
 * @property int $user_id
 *
 * @property Job[] $jobs
 *
 * @property string $imagePath
 * @property array $resumeIds
 */
class Company extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'companies';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'logo'], 'required'],
            [['username'], 'string', 'max' => 64],
            ['username', 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Name',
            'imagePath' => 'Logo',
        ];
    }

    public function getImagePath()
    {
        return Yii::getAlias('@frontend') . '/web/images/';
    }

    public function getImageUrl()
    {
        return '/images/'. $this->logo;
    }

    public function upload()
    {
        if ($this->validate()) {
            $imageName = uniqid('logo') . '.' . $this->logo->extension;
            $this->logo->saveAs($this->imagePath . $imageName);
            $this->logo = $imageName;
            return true;
        } else {
            return false;
        }
    }

    public static function getAllCompanyIds()
    {
        return self::find()->select(['username'])->indexBy('id')->column();
    }

    /**
     * Gets query for [[Jobs]].
     *
     * @return ActiveQuery
     */
    public function getJobs()
    {
        return $this->hasMany(Job::class, ['company_id' => 'id']);
    }

    /**
     * Gets query for [[Applications]].
     *
     * @return ActiveQuery
     */
    public function getApplications()
    {
        return $this->hasMany(Application::class, ['job_id' => 'id'])
            ->via('jobs');
    }

    public function getResumeIds()
    {
        return $this->getApplications()->select(['resume_id'])->column();
    }
}
