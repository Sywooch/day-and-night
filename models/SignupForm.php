<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * Signup form
 */
class SignupForm extends Model
{

    public $username;
    public $email;
    public $password;
    public $skype;
    public $confirmPassword;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\app\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],
            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\app\models\User', 'message' => 'This email address has already been taken.'],
            ['password', 'required'],
            ['password', 'string', 'min' => 6],
            ['confirmPassword', 'required'],
            ['confirmPassword', 'string', 'min' => 6],
            ['confirmPassword', 'custom_function_validation_confirm_password', 'message' => 'Пароль не совподает!'],
            ['skype', 'required'],
            ['skype', 'string', 'min' => 2, 'max' => 20],
        ];
    }

    public function custom_function_validation_confirm_password($attribute, $params)
    {
        if($this->password != $this->confirmPassword){
            $this->addError($attribute, 'Custom Validation Error - Пароль не совподает!');
            return false;
        }
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {

        if (!$this->validate()) {
            return null;
        }

        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        return $user->save() ? $user : null;
    }

    public function attributeLabels()
    {
        return [
            'username' => 'Имя*',
            'email' => 'E-mail*',
            'skype' => 'Skype*',
            'password' => 'Придумайте пароль*',
            'confirmPassword' => 'Повторите пароль*',
        ];
    }
}
