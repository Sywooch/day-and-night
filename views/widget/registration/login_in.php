<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 18.09.2017
 * Time: 12:38
 */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

<style>



</style>


<header class="page-header">
    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'inline',
        'method' => 'POST',
        'action' => "/site/login",
//        'enableAjaxValidation' => true,
//        'enableClientValidation' => true,
//        'validationUrl' => \yii\helpers\Url::to(['create-user-admin']),
        'fieldConfig' => [
            'template' => "{input}{error}",
            //'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

<!--    --><?php //$form = ActiveForm::begin([
//        'id' => 'login-form',
//        'layout' => 'inline',horizontal
//        'fieldConfig' => [
//            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
//            'labelOptions' => ['class' => 'col-lg-1 control-label'],
//        ],
//    ]); ?>
    <div class="row">
        <div class="col-xs-6">
            <div class="slog">
                <p>Web-dn " Постоянная и надежная работа для копирайтеров "</p>
            </div>
        </div>

        <div class="col-xs-6">
            <div class="login_box">
                <?= $form->field($model, 'email')
                    ->textInput([
                        'autofocus' => true,
                        'placeholder' => 'e-mail',
                        'class' => 'ef'
                    ])
                ?>
                <?= $form->field($model, 'password')
                    ->passwordInput([
                        'placeholder' => 'пароль',
                        'class' => 'ef',
                    ])
                ?>
                <?= \yii\bootstrap\Html::submitButton('ВОЙТИ', ['name' => 'login-button',]) ?>
                <div class="clear"></div>
                <div class="some">
                    <?= $form->field($model, 'rememberMe')->checkbox([
                        'template' => " {label} {input}  <a href=\"#\">забыли пароль</a>",
                    ]) ?>
                </div>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>
</header><!-- .header-->

<div class="line"></div>



