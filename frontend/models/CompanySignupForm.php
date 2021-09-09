<?php

namespace frontend\models;

use Yii;

/**
 * Signup form
 */
class CompanySignupForm extends SignupForm
{
    public $username;
    public $email;
    public $logo;
    public $password;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['logo', 'required'],

            ['password', 'required'],
            ['password', 'string', 'min' => Yii::$app->params['user.passwordMinLength']],
        ];
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
}
