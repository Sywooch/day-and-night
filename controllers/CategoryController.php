<?php

namespace app\controllers;

use app\models\myModal;
use Yii;
use app\models\jobs\CreateUpdateCategoryItem;
use app\models\jobs\RemoveCategoryItem;
use app\models\MenuItems;
use app\models\MenuItemsForm;
use yii\filters\VerbFilter;
use yii\helpers\Json;
use app\models\jobs\GetCategoryItem;
use app\controllers\SiteController;

class CategoryController extends BaseController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'create-element' => ['post'],
                    'update-element' => ['post'],
                    'delete-element' => ['post'],
                    'getChildrenElements' => ['post'],
                ],
            ],
        ];
    }

    public function actionIndex($event = null)
    {
        $form = new MenuItemsForm($event);

        myModal::getVal();

        if($data = $this->request->post('MenuItemsForm')){
            $form->attributes = $data;
            $form->validate();
        }

        $categories = $this->dispatch(
            (new GetCategoryItem())
                ->parent()
                ->forCategory()
        );

        $form->parent_id = null;

        return $this->render('index', [
            'model' => $form,
            'categories' => ['Главные' => $categories],
        ]);
    }

    public function actionCreateElement()
    {
        if(!$data = $this->request->post('MenuItemsForm')){
            return false;
        }

        $form = new MenuItemsForm(['scenario' => 'create']);
        $form->attributes = $data;

        if(!$this->dispatch((new CreateUpdateCategoryItem($form)))){
            Yii::$app->session->setFlash('menuItemsFormIsInvalid', [
                'action' => 'create',
                'elemName' => $form->name,
                'idElem' => $form->parent_id,
                'parentIdElem' => $form->parent_id,
            ]);

            return $this->actionIndex(['scenario' => 'create']);
        }

        return $this->redirect(['/']);
    }

    public function actionUpdateElement($id)
    {
        if(!$data = $this->request->post('MenuItemsForm')){
            return false;
        }

        $form = new MenuItemsForm(['scenario' => 'update']);
        $form->attributes = $data;

        $model = MenuItems::findOne($id);

        if(!$this->dispatch((new CreateUpdateCategoryItem($form, $model)))){
            Yii::$app->session->setFlash('menuItemsFormIsInvalid', [
                'action' => 'update',
                'elemName' => $form->name,
                'idElem' => $id,
                'parentIdElem' => $form->parent_id,
            ]);

            return $this->actionIndex(['scenario' => 'update']);
        }

        return $this->redirect(['/']);
    }

    public function actionDeleteElement($id)
    {
        if(!$data = $this->request->post('MenuItemsForm')){
            return false;
        }

        $this->dispatch((new RemoveCategoryItem($id)));
        return $this->redirect(['/']);
    }

    public function actionGetChildrenElements($id)
    {
        if(!$this->request->isAjax){
            return $this->redirect(['/']);
        }

        /** @var $menuItem MenuItems */
        if(!$menuItem = MenuItems::findOne($id)){
            return false;
        }

        /** @var int|null $updating */
        $updating = $this->request->post('update');

        /** @var array $categories */
        $categories = $this->dispatch(
            (new GetCategoryItem($menuItem))
                ->withoutCurrentByCategory($updating)
                ->gatParents()
        );

        $breadCrumbs = null;
        foreach ($categories as $key => &$val){
            $breadCrumbs = (!$breadCrumbs ? $val['parentName'] : $breadCrumbs . ' > ' . $val['parentName']);
            $val['parentName'] = $breadCrumbs;
        }

        return Json::encode($categories);
    }

    public function actionRunMyModal($is = null)
    {
        myModal::getVal();
        myModal::setVal($is);
        return $this->redirect(['/']);
    }
}
