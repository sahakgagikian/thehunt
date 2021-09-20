<?php

namespace frontend\models;

use common\models\User;
use Yii;

/**
 * Signup form
 */
class CompanySignupForm extends SignupForm
{
    const REGISTRATION_TYPE = self::COMPANY;

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

            ['type', 'string'],
            ['type', 'in', 'range' => [self::REGISTRATION_TYPE]],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null whether the creating new account was successful and email was sent
     */
    public function signup(): ?User
    {
        if (!$this->validate()) {
            return null;
        }

        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->type = self::REGISTRATION_TYPE;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->generateEmailVerificationToken();
        $saveAndSendEmail = $user->save() && $this->sendEmail($user);

        if ($saveAndSendEmail) {
            return $user;
        }

        return null;
    }

    public function upload()
    {
        if ($this->validate()) {
            $path = 'images/' . uniqid('logo') . '.' . $this->logo->extension;
            $this->logo->saveAs('@frontend/web/' . $path);
            $this->logo = $path;
            return true;
        } else {
            return false;
        }
    }
}
