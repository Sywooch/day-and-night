<?php

namespace app\controllers;

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
        return $this->render('index');
    }

    /** Главный Редактор */
    public function actionARed()
    {
        return $this->render('a_red');
    }


    /** Правила для копирайтеров */
    public function actionAInstructions()
    {
        return $this->render('a_instructions');
    }

    /** Статьи для копирайтеров */
    public function actionAArticles()
    {
        return $this->render('a_articles');
    }

    /** Новости для копирайтеров */
    public function actionANews()
    {
        return $this->render('a_news');
    }

    /** Комментарии для копирайтеров */
    public function actionAComments()
    {
        return $this->render('a_comments');
    }

    /** Профиль копирайтера */
    public function actionCopProfile()
    {
        return $this->render('cop_profile');
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
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
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
}
