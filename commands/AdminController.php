<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 07.12.2017
 * Time: 0:30
 */

namespace app\commands;

use yii\console\Controller;
use app\models\User;

class AdminController extends Controller
{
    public function actionAddAdmin() {
        //$model = User::find()->where(['username' => 'admin'])->one();
        //if (empty($model)) {
            $user = new User();
            $user->username = 'userTester';
            $user->email = 'tester@coder.com';
            $user->setPassword('tester');
            $user->generateAuthKey();
            if ($user->save()) {
                echo 'good';
            }
        //}
    }
}