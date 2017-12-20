<?php

namespace app\models;

use Yii;
use yii\base\Model;

class UserProfileForm extends Model
{
    /** @var   */
    public $email;

    /** @var   */
    public $username;

    /** @var   */
    public $skype;

    /** @var   */
    public $wmr;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['username', 'email'], 'required'],
            [['username', 'email'], 'string', 'max' => 255],
            [['skype'], 'string', 'max' => 50],
            [['wmr'], 'string', 'max' => 40],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'username' => 'Имя*',
            'email' => 'E-mail*',
            'skype' => 'Skype*',
            'wmr' => 'Кошелёк WMR*',
        ];
    }

    /**
     * @return UserProfileForm
     */
    static public function getUserProfileForm()
    {
        $user_id = Yii::$app->getUser()->getId();

        $form = new UserProfileForm();
        $user = Users::findOne($user_id);
        $profile = UserProfile::findOne($user_id);

        $form->email = $user->email;
        $form->username = $user->username;

        if($profile){
            $form->skype = $profile->skype;
            $form->wmr = $profile->wmr;
        }

        return $form;
    }
}
