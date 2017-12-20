<?php

namespace app\controllers;

use app\models\jobs\UpdateUserSettingsJob;
use app\models\Manual;
use app\models\News;
use app\models\SignupForm;
use app\models\Topics;
use app\models\User;
use app\models\UserProfileForm;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Response;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\MenuItemsForm;
use app\models\jobs\GetCategoryItem;
use yii\widgets\ActiveForm;

class SiteController extends BaseController
{

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /** Регистрация для входа в систему */
    public function actionIndex()
    {
        return $this->render('index', [
            'model' => new SignupForm(),
        ]);
    }

    /** Главный Редактор */
    public function actionARed()
    {
        return $this->render('a_red');
    }

    /** Правила для копирайтеров */
    public function actionAInstructions($id = null)
    {
        $instructions = Manual::find()->all();

        return $this->render('a_instructions', [
            'current' => $id ? $instructions[$id] : $instructions[0],
            'instructions' => $instructions,
        ]);
    }

    /** Статьи для копирайтеров */
    public function actionAArticles()
    {
        return $this->render('a_articles');
    }

    /** Новости для копирайтеров */
    public function actionANews()
    {
        return $this->render('a_news', ['items' => News::find()->all()]);
    }

    /** Комментарии для копирайтеров */
    public function actionAComments()
    {
        return $this->render('a_comments');
    }

    /** Профиль копирайтера */
    public function actionCopProfile()
    {
        $model = new UserProfileForm();;

        if ($model->load(Yii::$app->request->post())) {
            $this->dispatch((new UpdateUserSettingsJob($model)));
        } else {
            $model = UserProfileForm::getUserProfileForm();
        }

        return $this->render('cop_profile', [
            'model' => $model,
            'topics' => Topics::find()->where($this->holders('status=1'))->all(),
        ]);
    }

    /** Текущие работы  копирайтера*/
    public function actionCopWorks()
    {
        return $this->render('cop_works');
    }

    /** Получить задание для копирайтера */
    public function actionCopGetWork()
    {
        return $this->render('cop_get_work');
    }

    /**Новое задание для копирайтера*/
    public function actionCopNewWork()
    {
        return $this->render('cop_new_work');
    }

    /** В работе для копирайтера*/
    public function actionCopInWork()
    {
        return $this->render('cop_in_work');
    }

    /** Получить задание для копирайтера */
    public function actionCopOutWork()
    {
        return $this->render('cop_out_work');
    }

    /** К оплате для копирайтера */
    public function actionCopPay()
    {
        return $this->render('cop_pay');
    }


    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->login()) {
            return $this->goBack();
        }

        return $this->goBack();
//        return $this->render('index', [
//            'model' => $model,
//        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionCreateItem()
    {

    }

    public function actionSignup()
    {
        $model = new SignupForm();

        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    public function actionAdmin()
    {
        return $this->render('admin', [
            'users' => User::find()
                ->where(new \yii\db\Expression("username != 'admin'", []))
                ->limit(5)
                ->asArray()
                ->all()
        ]);
    }

    private function holders($name, $params = [])
    {
        return new \yii\db\Expression($name, $params);
    }
}
