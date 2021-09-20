<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    const REGISTRATION_TYPE = null;
    const CANDIDATE = 'candidate';
    const COMPANY = 'company';

    public $username;
    public $email;
    public $password;
    public $type;

    /**
     * Sends confirmation email to user
     * @param User $user user model to with email should be send
     * @return bool whether the email was sent
     */
    protected function sendEmail($user)
    {
        return Yii::$app
            ->mailer
            ->compose(
                ['html' => 'emailVerify-html', 'text' => 'emailVerify-text'],
                ['user' => $user]
            )
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name . ' robot'])
            ->setTo($this->email)
            ->setSubject('Account registration at ' . Yii::$app->name)
            ->send();
    }

    public function textInput($options = [])
    {
        parent::textInput($options);
        $this->template = '{label}
                        {input}
                        <div class="error">{error}{hint}
                        </div>
            ';
        $this->options = ['class' => 'form-group label-floating'];
        return $this;
    }

}
