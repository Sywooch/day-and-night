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
                    <ul class="flashing-link flashing-up">
                        <li> &nbsp; <?= Html::a( 'Главная', '/') ?></li>
                        <li> &nbsp; <?= Html::a('Правила', '/manual') ?></li>
                        <li> &nbsp; <?= Html::a('Новости', '/site/a-news') ?></li>
                        <li> &nbsp; <?= Html::a('Контакты', '/site/contact') ?></li>

                        <li class="nav-divider"></li>
                        <li> &nbsp; <?= Html::a('Задачи COP', '/query') ?></li>
                        <li> &nbsp; <?= Html::a('Задачи WEB', '/query-work') ?></li>

                        <li class="nav-divider"></li>
                        <li> &nbsp; <?= Html::a('Темы', '/topics') ?></li>
                        <li> &nbsp; <?= Html::a('Текущие темы', '/topics-use') ?></li>
                        <li> &nbsp; <?= Html::a('Задания', '/mission') ?></li>
                        <li> &nbsp; <?= Html::a('Пользователи', '/site/a-red') ?></li>
                    </ul>
                </li>


                <li class="nav-header"><a href="#"><span>Копирайтеры</span></a>
                    <ul class="flashing-link flashing-up">
                        <li> &nbsp; <?= Html::a('Правила', '/site/a-instructions') ?></li>
                        <li> &nbsp; <?= Html::a('Профиль', '/site/cop-profile') ?></li>
                        <li> &nbsp; <?= Html::a('Получить задание', '/site/cop-get-work') ?></li>
                        <li> &nbsp; <?= Html::a('Текущие задания', '/site/cop-works') ?></li>
                        <li> &nbsp; <?= Html::a('Читать статьи', '/site/a-articles') ?></li>
                        <li> &nbsp; <?= Html::a('Комментарии редактора', '/site/a-comments') ?></li>
                        <li class="nav-divider"></li>
                        <li> &nbsp; <?= Html::a('Баланс', '#') ?></li>
                        <li> &nbsp; <?= Html::a('Ставка', '#') ?></li>
                        <li> &nbsp; <?= Html::a('К оплате', '/site/cop-pay') ?></li>
                        <li> &nbsp; <?= Html::a('Новое', '/site/cop-new-work') ?></li>
                        <li> &nbsp; <?= Html::a('В работе', '/site/cop-in-work') ?></li>
                        <li> &nbsp; <?= Html::a('Доработка', '/site/cop-out-work') ?></li>
                        <li> &nbsp; <?= Html::a('Проверка', '#') ?></li>
                    </ul>
                </li>

                <li class="nav-divider"></li>
                <li class="nav-divider"></li>
            </ul>
        </div>
    </div>


<?php endif; ?>

