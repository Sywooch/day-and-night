<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 07.12.2017
 * Time: 0:30
 */

namespace app\commands;

use Yii;
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

    public function actionInit()
    {
        $auth = Yii::$app->authManager;

        print_r($auth);


        // добавляем разрешение "createPost"
        $createPost = $auth->createPermission('createManual');
        $createPost->description = 'Create a Manual';
        $auth->add($createPost);

        // добавляем разрешение "updatePost"
        $updatePost = $auth->createPermission('updateManual');
        $updatePost->description = 'Update post';
        $auth->add($updatePost);

        // добавляем роль "author" и даём роли разрешение "createPost"
//        $author = $auth->createRole('admin');
//        $auth->add($author);
//        $auth->addChild($author, $createPost);

//        exit;

        // добавляем роль "admin" и даём роли разрешение "updatePost"
        // а также все разрешения роли "author"
        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->addChild($admin, $createPost);
        $auth->addChild($admin, $updatePost);

        // Назначение ролей пользователям. 1 и 2 это IDs возвращаемые IdentityInterface::getId()
        // обычно реализуемый в модели User.
//        $auth->assign($author, 2);
        $auth->assign($admin, 1);
    }

    public function actionA()
    {
        $auth = Yii::$app->authManager;
        $authorRole = $auth->getRole('admin');
        $auth->assign($authorRole, Yii::$app->getUser()->getId());
    }

    public function actionAuth()
    {
        $auth = Yii::$app->authManager;

        $manageManual = $auth->createPermission('manageManual');
        $manageManual->description = 'Manage a Manual';
        $auth->add($manageManual);

        $viewManual = $auth->createPermission('viewManual');
        $viewManual->description = 'View a Manual';
        $auth->add($viewManual);

        $deleteManual = $auth->createPermission('deleteManual');
        $deleteManual->description = 'Delete a Manual';
        $auth->add($deleteManual);

        $admin = $auth->getRole('admin');

        $auth->addChild($admin, $manageManual);
        $auth->addChild($admin, $viewManual);
        $auth->addChild($admin, $deleteManual);
    }
}