<?php

namespace common\models;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "companies".
 *
 * @property int $id
 * @property string $name
 * @property string $logo
 *
 * @property Job[] $jobs
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
            [['name', 'logo'], 'required'],
            [['name'], 'string', 'max' => 64],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'imagePath' => 'Logo',
        ];
    }

    public function getImagePath()
    {
        return '/backend/web/' . $this->logo;
    }

    public function upload()
    {
        if ($this->validate()) {
            $path = 'images/' . uniqid('logo') . '.' . $this->logo->extension;
            $this->logo->saveAs('@backend/web/' . $path);
            $this->logo = $path;
            return true;
        } else {
            return false;
        }
    }

    /**
     * Gets query for [[Job]].
     *
     * @return ActiveQuery
     */
    public function getJobs()
    {
        return $this->hasMany(Job::class, ['company_id' => 'id']);
    }
}
