<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 20.12.2017
 * Time: 23:37
 */

namespace app\models\jobs;

use app\models\UserProfile;
use app\models\Users;
use Yii;
use app\models\UserProfileForm;

class UpdateUserSettingsJob extends Job
{
    /** @var UserProfileForm  */
    private $form;

    /** @var Users  */
    private $user;

    /** @var UserProfile  */
    private $profile;

    public function __construct(UserProfileForm $form)
    {
        $user_id = Yii::$app->getUser()->getId();

        $this->form = $form;
        $this->user = Users::findOne($user_id);
        $this->profile = UserProfile::findOne($user_id);

        if(!$this->profile){
            $this->profile = new UserProfile();
            $this->profile->id_user = $user_id;
        }
    }

    public function handle()
    {
        if(!$this->form->validate()){
            return null;
        }

        if($this->user->username != $this->form->username){
            $this->user->username = $this->form->username;
            $this->user->save();
        }

        $this->profile->skype = $this->form->skype;

        if(!$this->profile->wmr){
            $this->profile->wmr = $this->form->wmr;
        }

        $this->profile->save();
    }
}
