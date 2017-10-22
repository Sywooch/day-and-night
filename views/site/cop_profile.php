<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 16.09.2017
 * Time: 17:16
 */
?>


<?= \app\components\StatisticsWidget::widget() ?>

<?= \app\components\TransitionWidget::widget([
    'pageName' => 'Мой Профиль',
    'button1' => ['НОВОСТИ', '/site/cop-news'],
    'button2' => ['КОММЕНТАРИИ РЕДАКТОРА', '/site/cop-comments'],
    'button3' => ['ТЕКУЩИЕ ЗАДАНИЯ', '/site/cop-works'],
    'button4' => ['ПОЛУЧИТЬ ЗАДАНИЕ', '/site/cop-get-work'],
]) ?>

<div class="content-pro">

    <div class="col-xs-12"></div>

    <div class="col-xs-6">
        <div class="content-register">
            <h5>Редактировать данные :</h5>
            <div class="register">
                <a name="register"></a>
                <form action="/index.php?r=user/registering#register" method="POST">
                    <div class="register_form">
                        <label>Имя*</label>
                        <input type="text" name="username" id="username" />
                        <span class="error"></span>
                        <label>E-mail*</label>
                        <input type="text" name="email" id="email" />
                        <span class="error"></span>
                        <label>Skype*</label>
                        <input type="text" name="skype" id="skype" />
                        <span class="error"></span>
                        <label>Кошелёк WMR*</label>
                        <input type="text" name="purse" id="purse" />
                        <span class="error"></span>
                        <label>Придумайте пароль*</label>
                        <input type="password" value="" name="password" id="password" />
                        <span class="error"></span>
                        <label>Повторите пароль*</label>
                        <input type="password" value="" name="confirmPassword" id="confirmPassword" />
                        <input type="hidden" name="ref" value="" />
                        <input type="submit" name="yt0" value="Сохранить" />
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-xs-6">
        <h5>Выбери темы, в которых лучше разбираешься.</h5>
        <dl>Тебе будут приходить задания по выбранной тематике. Отметь минимум 3 позиции.</dl>
        <div class="col-xs-4"></div>
        <div class="col-xs-4">
            <div class="choice">
                <a href="#" class="btn btn-warning active btn-xs btn-block" role="button">Реклама</a>
                <a href="#" class="btn btn-warning active btn-xs btn-block" role="button">Туризм</a>
                <a href="#" class="btn btn-warning active btn-xs btn-block" role="button">Медицина</a>
                <a href="#" class="btn btn-warning active btn-xs btn-block" role="button">Лекарства</a>
                <a href="#" class="btn btn-warning active btn-xs btn-block" role="button">Народные средства</a>
                <a href="#" class="btn btn-warning active btn-xs btn-block" role="button">Сад и огород</a>
                <a href="#" class="btn btn-warning active btn-xs btn-block" role="button">Домашнее хозяйство</a>
                <a href="#" class="btn btn-warning active btn-xs btn-block" role="button">Домашние животные</a>
                <a href="#" class="btn btn-warning active btn-xs btn-block" role="button">Дикая природа</a>
                <a href="#" class="btn btn-warning active btn-xs btn-block" role="button">Эзотерика</a>
            </div>
        </div>
        <div class="col-xs-4"></div>
    </div>
</div><!-- .content-pro -->
