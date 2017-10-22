<?php

/**
 * @var $categories array
 * @var $this yii\web\View
 * @var $val \app\models\MenuItems
 * @var $model \app\models\MenuItemsForm
 */

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
            <h3>Тогда любимое дело принесет Вам регулярный доход!</h3>
        </div>
        <div class="col-xs-6">
            <p>" Зарабатывайте дома по личному графику. Удаленно и Стабильно. "</p>
        </div>
        <div class="col-xs-6">
            <p>" Пройдите регистрацию, возьмите тему и напишите статью. "</p>
        </div>
    </div>
</div><!-- .citations -->

<div class="main">
    <div class="row">
        <div class="offer">
            <div class="col-xs-6">
                <h5>Преимущества от сотрудничества:</h5><br>
                <p>Интересные темы</p>
                <p>Четкие требования</p>
                <p>Оперативная обратная<br>
                   связь</p>
                <p>Сроки выполнения<br>
                    задания - 24 часа</p>
                <p>Прием каждой статьи<br>
                    до 3-х дней</p>
                <p>Цена статьи 60 руб.</p>
                <p>Гарантированная оплата<br>
                   каждую неделю</p>
            </div>
        </div>
        <div class="col-xs-6">
            <div class="content-main">
                <div class="content-register">
                    <div class="register">
                        <a name="register"></a>
                        <div class="title"><h5>Регистрация :</h5></div>
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
                                <input type="submit" name="yt0" value="Зарегистрироваться" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- .main -->

<div class="news-articles">
    <div class="row">
        <div class="col-xs-1"></div>
        <div class="col-xs-5">
            <div class="topics">
                <h5>Последние статьи :</h5>
                <p>- Как проверить уникальность?</p>
                <p>- Для проверки уникальности воспользуйтесь сервисами…</p>
                <p>- Примеры использования ключевых слов...</p>
                <p>- Читать далее…</p>
            </div>
        </div>
        <div class="col-xs-6">
            <div class="news-data">
                <h6>Дата</h6>
                <p>01.09.2017</p>
                <p>01.10.2017</p>
                <p>01.11.2017</p>
                <p>01.12.2017</p>
            </div>
        </div>
    </div>
</div><!-- .news -->
