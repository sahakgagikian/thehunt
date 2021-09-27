<?php

namespace frontend\models;

use common\models\User;
use DateTimeZone;
use Yii;

/**
 * Signup form
 */
class CandidateSignupForm extends SignupForm
{
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

            ['password', 'required'],
            ['password', 'string', 'min' => Yii::$app->params['user.passwordMinLength']],

            ['role', 'integer'],
            ['role', 'in', 'range' => [1, 2]],

            ['timezone', 'string'],
            ['timezone', 'required'],
        ];
    }

    /**
     * Signs user up.
     *
     * @return bool whether the creating new account was successful and email was sent
     */
    public function signup(): ?User
    {
        if (!$this->validate()) {
            return null;
        }

        $postRequest = Yii::$app->request->post();
        $timezoneList = DateTimeZone::listIdentifiers();
        $selectedTimezone = $timezoneList[$postRequest['CandidateSignupForm']['timezone']];

        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->role = User::CANDIDATE;
        $user->timezone = $selectedTimezone;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->generateEmailVerificationToken();
        $saveAndSendEmail = $user->save() && $this->sendEmail($user);

        if ($saveAndSendEmail) {
            return $user;
        }

        return null;
    }
}
