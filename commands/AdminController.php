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
        $user = new User();
        $user->username = 'userTester';
        $user->email = 'bek@coder.com';
        $user->setPassword('bekcoder');
        $user->generateAuthKey();
        if ($user->save()) {
            echo 'good';
        }

        $auth = Yii::$app->authManager;
        $coder = $auth->createRole('coder');
        $admin = $auth->getRole('admin');


        function ggggg(\yii\rbac\DbManager &$auth, \yii\rbac\Role $admin, $name, $mass){
            $manage = $auth->createPermission($name);
            $manage->description = $mass;
            $auth->add($manage);
            $auth->addChild($admin, $manage);
        }
        
        ggggg($auth, $admin, 'manageTopics', 'Менеджер тем');
        ggggg($auth, $admin, 'viewTopics', 'Обзор тем');
        ggggg($auth, $admin, 'createTopics', 'Создание темы');
        ggggg($auth, $admin, 'updateTopics', 'Обновление темы');
        ggggg($auth, $admin, 'deleteTopics', 'Удаление темы');

        ggggg($auth, $admin, 'manageTopicsUse', 'Менеджер тематических связей');
        ggggg($auth, $admin, 'viewTopicsUse', 'Обзор тематических связей');
        ggggg($auth, $admin, 'createTopicsUse', 'Создание тематических связей');
        ggggg($auth, $admin, 'updateTopicsUse', 'Обновление тематических связей');
        ggggg($auth, $admin, 'deleteTopicsUse', 'Удаление тематических связей');

        ggggg($auth, $admin, 'manageManual', 'Менеджер инструкций и правил');
        ggggg($auth, $admin, 'viewManual', 'Обзор инструкций и правил');
        ggggg($auth, $admin, 'createManual', 'Создание инструкций и правил');
        ggggg($auth, $admin, 'updateManual', 'Обновление инструкций и правил');
        ggggg($auth, $admin, 'deleteManual', 'Удаление инструкций и правил');

        ggggg($auth, $admin, 'manageNews', 'Менеджер новостей и объявлений');
        ggggg($auth, $admin, 'viewNews', 'Обзор новостей и объявлений');
        ggggg($auth, $admin, 'createNews', 'Создание новостей и объявлений');
        ggggg($auth, $admin, 'updateNews', 'Обновление новостей и объявлений');
        ggggg($auth, $admin, 'deleteNews', 'Удаление новостей и объявлений');



        ///usr/local/php5.3/bin/php-cgi -v
        //../../usr/local/php/php56/bin/php -v
        //../../../../usr/local/php/php56/bin/php composer.phar install
        //../../../../../../usr/local/php/php56/bin/php composer.phar install
//../../../../../../usr/local/php/php56/bin % php56 -v
//ssh-keygen -t rsa -b 4096 -C "kashtanov_as@ukr.net"
    }
}
