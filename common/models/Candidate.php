<?php

namespace common\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "candidates".
 *
 * @property int $id
 * @property string $username
 * @property int $user_id
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
}
