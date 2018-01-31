<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \app\modules\rbacManager\models\AuthItem;

/*
 * @var $this yii\web\View
 * @var $model \app\modules\rbacManager\models\RoleForm
 * @var $form yii\widgets\ActiveForm
 * @var $dropDownList array
 */


?>

<div class="mission-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rule_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parent_name')->dropDownList(AuthItem::getForDropDownList(), []) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
