<?php if(\Yii::$app->user->can('admin')): ?>

<div class = "col-xs-12 col-md-4">
    <div class="drop-menu">
        <!-- боковое Меню ссылок-->
        <div class="menu-tabs">
            <h2> М Е Н Ю </h2>
            <ul class="nav nav-stacked">
                <li class="nav-divider"></li>
                <li class="nav-divider"></li>
                <li class="nav-header"><a href="#"><span>Главные ссылки</span></a>
                    <ul>
                        <li><a href="#">Главная</a></li>
                        <li><a href="#">Контакты</a></li>
                        <li><a href="#">Правила</a></li>
                        <li><a href="#">Новости</a></li>
                    </ul>
                </li>
                <li class="nav-divider"></li>
                <li class="nav-header"><a href="#"><span>Рабочие ссылки</span></a>
                    <ul>
                        <li><a href="#">Задания</a></li>
                        <li><a href="#">Темы</a></li>
                        <li><a href="#">Статьи</a></li>
                        <li><a href="#">Редакция</a></li>
                    </ul>
                </li>
                <li class="nav-divider"></li>
                <li class="nav-header"><a href="#"><span>Копирайтеры</span></a>
                    <ul>
                        <li><a href="#">Профили</a></li>
                        <li><a href="#">Новые задания</a></li>
                        <li><a href="#">Текущие задания</a></li>
                        <li><a href="#">Доработка</a></li>
                    </ul>
                </li>
                <li class="nav-divider"></li>
                <li class="nav-header"><a href="#"><span>Редакторы</span></a>
                    <ul>
                        <li><a href="#">Профили</a></li>
                        <li><a href="#">Новые задания</a></li>
                        <li><a href="#">Рабочие задания</a></li>
                        <li><a href="#">Комментарии</a></li>
                    </ul>
                </li>
                <li class="nav-divider"></li>
                <li class="nav-header"><a href="#"><span>Финансы</span></a>
                    <ul>
                        <li><a href="#">Ставки</a></li>
                        <li><a href="#">Оплаты</a></li>
                        <li><a href="#">Платежи</a></li>
                    </ul>
                </li>
                <li class="nav-divider"></li>
                <li class="nav-divider"></li>
            </ul>
        </div>
    </div>
</div>

<?php endif; ?>

