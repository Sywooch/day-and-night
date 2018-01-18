<?php

/* @var $model app\models\LoginForm */

use yii\bootstrap\Html;
use yii\bootstrap\ActiveForm;
use \app\components\CategoryViewWidget;

$this->title = 'Главная';

?>

<div class="main-background">
    <div class="back-image"></div>
</div><!-- .main-background -->


<div class="citations">
    <div class="row">
        <div class="col-xs-12">
            <h3>Умеете писать статьи?</h3>
            <h3>Тогда любимое дело принесет Вам доход %</h3>
        </div>
        <div class="col-xs-6">
            <p>" Зарабатывайте удаленно по личному графику !"</p>
        </div>
        <div class="col-xs-6">
            <?php if (Yii::$app->user->isGuest): ?>
                <p>" Пройдите регистрацию и возьмите задание !"</p>
            <?php endif; ?>
        </div>
    </div>
</div><!-- .citations -->

<div class="main">
    <div class="row">
        <div class="offer">
            <div class="col-xs-6">
                <h5>Сотрудничая с нами, Вы получаете:</h5><br>

                <p>Интересные темы для творчества</p>
                <p>Консультации и четкие требования</p>
                <p>Оперативная техническая поддержка</p>
                <p>Сроки выполнения задания - 24 часа</p>
                <p>Прием каждой статьи до 3-х дней</p>
                <p>Цена завершенной статьи - 60 руб.</p>
                <p>Гарантированная оплата каждую неделю</p>
            </div>
        </div>
        <div class="col-xs-6">
            <?php if (Yii::$app->user->isGuest): ?>
                <div class="content-main">
                    <div class="content-register">
                        <div class="register">
                            <h5>Регистрация :</h5>

                            <?php $form = ActiveForm::begin([
                                'id' => 'form-signup',
                                //'layout' => 'horizontal',
                                'method' => 'POST',
                                'action' => "/site",
                                'fieldConfig' => [
                                    'template' => "{label}{input}{error}",
                                    //'labelOptions' => ['class' => 'col-lg-1 control-label'],
                                ],
                            ]); ?>

                                <div class="register_form">

                                    <?= $form->field($model, 'username')->textInput([
                                            'autofocus' => true,
                                            'style' => 'height: 20px;',
                                    ]) ?>

                                    <?= $form->field($model, 'email')->input('email', [
                                        'style' => 'height: 20px;',
                                    ]) ?>

                                    <?= $form->field($model, 'skype')->textInput([
                                        'style' => 'height: 20px;',
                                    ]) ?>

                                    <?= $form->field($model, 'password')->passwordInput([
                                        'style' => 'height: 20px;',
                                    ]) ?>

                                    <?= $form->field($model, 'confirmPassword')->passwordInput([
                                        'style' => 'height: 20px;',
                                    ]) ?>

                                    <?= Html::submitButton('Зарегистрироваться', []) ?>

                                </div>

                            <?php ActiveForm::end(); ?>

                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div><!-- .main -->

<div class="news-articles">
    <div class="row">
        <div class="col-xs-1"></div>
        <div class="col-xs-5">
            <div class="topics">
                <h5>Читать статьи :</h5>
                <p>- Как проверить уникальность?</p>
                <p>- Для проверки уникальности воспользуйтесь сервисами…</p>
                <p>- Примеры использования ключевых слов...</p>
                <p>- Читать далее…</p>
            </div>
        </div>
        <div class="col-xs-6">
            <div class="news-data">
                <h6>дата</h6>
                <p>01.07.2018</p>
                <p>01.14.2018</p>
                <p>01.19.2018</p>
                <p>01.21.2018</p>
            </div>
        </div>
    </div>
</div><!-- .news -->
