<?php

namespace app\modules\rbacManager\controllers;

use app\modules\rbacManager\models\AuthItem;
use app\modules\rbacManager\models\AuthItemSearch;
use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\web\Controller;
use yii\rbac\DbManager;
use app\modules\rbacManager\Module;
use app\modules\rbacManager\models\RoleForm;

/**
 * Default controller for the `rbacMenegar` module
 */
class DefaultController extends Controller
{
    /** @var DbManager */
    private $auth;

    public function __construct($id, Module $module, array $config = [])
    {
        $this->auth = Yii::$app->authManager;
        //d([$this->auth->(), $this->auth->getPermissions()]);
        parent::__construct($id, $module, $config);
    }

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new AuthItemSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Creates a new Query model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new RoleForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            $newRole = $this->auth->createPermission($model->name);
            //$newRole->ruleName = $model->rule_name;
            $newRole->description = $model->description;

            $auth = $this->auth;

           // d( $newRole );

            $this->auth->add($newRole);

            if(($role = $model->parent_name) && $role = $this->auth->getRole($role)){
                $this->auth->addChild($role, $newRole);
            }

            return $this->redirect(['/rbacManager/authItem/view', 'name' => $model->name]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    public function actionOst()
    {
        return $this->render('ostrosyuzhetnoe');
    }

    public function actionStr()
    {
        return $this->render('strashnoe_hd');
    }

    public function actionST()
    {
        return $this->render('tv_3');
    }
}
