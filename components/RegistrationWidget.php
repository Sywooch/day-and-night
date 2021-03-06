<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 18.09.2017
 * Time: 12:28
 */

namespace app\components;

use app\models\LoginForm;
use Yii;
use yii\base\Widget;

class RegistrationWidget extends Widget
{
    public function init()
    {

    }

    public function run()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->render('came_in', ['model' => new LoginForm()]);
        } else {
            return $this->render('login_in', ['model' => new LoginForm()]);
        }
    }

    public function getViewPath()
    {
        return parent::getViewPath() . "\\..\\..\\views\\widget\\registration";
    }
}