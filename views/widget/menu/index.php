<?php

use yii\helpers\Html;

?>

<?php if(\Yii::$app->user->can('admin')): ?>


    <div class="drop-menu">
        <!-- боковя кнопка Меню ссылок-->
        <div class="menu_block button-M"><h2>M E N U</h2></div>
        <!-- боковое Меню ссылок-->
        <div class="menu_block menu-tabs">
            <ul class="nav nav-stacked">
                <li class="nav-divider"></li>

                <li class="nav-divider"></li>
                <li class="nav-header"><a href="#"><span>Администратор</span></a>
                    <ul>
                        <li><?= Html::a('Главная', '/') ?></li>
                        <li><?= Html::a('Правила', '/manual') ?></li>
                        <li><?= Html::a('Новости', '/site/a-news') ?></li>
                        <li><?= Html::a('Контакты', '/site/contact') ?></li>

                        <li class="nav-divider"></li>
                        <li><?= Html::a('Задачи COP', '/query') ?></li>
                        <li><?= Html::a('Задачи WEB', '/query-work') ?></li>

                        <li class="nav-divider"></li>
                        <li><?= Html::a('Темы', '/topics') ?></li>
                        <li><?= Html::a('Текущие темы', '/topics-use') ?></li>
                        <li><?= Html::a('Задания', '/mission') ?></li>
                        <li><?= Html::a('Пользователи', '/site/a-red') ?></li>

                    </ul>
                </li>

                <li class="nav-divider"></li>
                <li class="nav-divider"></li>
                <li class="nav-header"><a href="#"><span>Копирайтеры</span></a>
                    <ul>
                        <li><?= Html::a('Правила', '/site/a-instructions') ?></li>
                        <li><?= Html::a('Профиль', '/site/cop-profile') ?></li>
                        <li><?= Html::a('Получить задание', '/site/cop-get-work') ?></li>
                        <li><?= Html::a('Текущие задания', '/site/cop-works') ?></li>
                        <li><?= Html::a('Статьи', '/site/a-articles') ?></li>
                        <li><?= Html::a('Комментарии редактора', '/site/a-comments') ?></li>
                        <li class="nav-divider"></li>
                        <li><?= Html::a('Баланс', '#') ?></li>
                        <li><?= Html::a('Ставка', '#') ?></li>
                        <li><?= Html::a('К оплате', '/site/cop-pay') ?></li>
                        <li><?= Html::a('Новое', '/site/cop-new-work') ?></li>
                        <li><?= Html::a('В работе', '/site/cop-in-work') ?></li>
                        <li><?= Html::a('Доработка', '/site/cop-out-work') ?></li>
                        <li><?= Html::a('Проверка', '#') ?></li>
                    </ul>
                </li>

                <li class="nav-divider"></li>
                <li class="nav-divider"></li>
            </ul>
        </div>
    </div>


<?php endif; ?>

