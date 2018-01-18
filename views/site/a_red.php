<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 16.09.2017
 * Time: 16:15
 */
?>


<div class="content-bal">
    <div class="row">
        <div class="col-xs-2">
            <div class="sum">
                <div class="btn-group-vertical btn-block">
                    <button type="button" class="btn btn-success active btn-xs">Текущий баланс</button>
                    <button type="button" class="btn btn-default active btn-xs">Ставка</button>
                </div>
            </div>
        </div>
        <div class="col-xs-1">
            <div class="rub">
                <div class="btn-group-vertical btn-block">
                    <a href="#" class="btn btn-success active btn-xs" role="button">3200 р.</a>
                    <a href="#" class="btn btn-default active btn-xs" role="button">15 р.</a>
                </div>
            </div>
        </div>
        <div class="col-xs-2">
            <div class="cost">
                <div class="btn-group-vertical btn-block">
                    <button type="button" class="btn btn-success active btn-xs">Проверено</button>
                    <a href="#" class="btn btn-default active btn-xs" role="button">5</a>
                </div>
            </div>
        </div>
        <div class="col-xs-1"></div>
        <div class="col-xs-1">
            <div class="work-new">
                <div class="btn-group-vertical btn-block">
                    <button type="button" class="btn btn-success active btn-xs">Проверить</button>
                    <a href="#" class="btn btn-default active btn-xs" role="button">1</a>
                </div>
            </div>
        </div>
        <div class="col-xs-1">
            <div class="work-now">
                <div class="btn-group-vertical btn-block">
                    <button type="button" class="btn btn-success active btn-xs">В работе</button>
                    <a href="#" class="btn btn-default active btn-xs" role="button">1</a>
                </div>
            </div>
        </div>
        <div class="col-xs-2">
            <div class="work-final">
                <div class="btn-group-vertical btn-block">
                    <button type="button" class="btn btn-success active btn-xs">На доработке</button>
                    <a href="#" class="btn btn-default active btn-xs" role="button">1</a>
                </div>
            </div>
        </div>
        <div class="col-xs-2">
            <div class="work-test">
                <div class="btn-group-vertical btn-block">
                    <button type="button" class="btn btn-success active btn-xs">С доработки</button>
                    <a href="#" class="btn btn-default active btn-xs" role="button">3</a>
                </div>
            </div>
        </div>
    </div>
</div><!-- .content-bal-->


<?= \app\components\TransitionWidget::widget([
    'pageName' => 'Пользователи',
    'button1' => ['НОВОСТИ', '/site/a-news'],
    'button2' => ['Оставить Комментарий', '/site/a-comments'],
    'button3' => ['Пользователи', '/site/a-red'],
    'button4' => ['Добавить "Новая Статья"', '/site/cop-new-work'],
]) ?>



<div class="content-tables">

    <div class="col-xs-12">
        <table class="table table-bordered btn-default">
            <thead>
            <tr>
                <th>Пользователи</th>
                <th>Тематика</th>
                <th>Название</th>
                <th>Статус</th>
                <th>Объем</th>
                <th>Время начала</th>
                <th>Срок сдачи</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Nika</td>
                <td>Сад и огород</td>
                <td>Королевские помидоры</td>
                <td>В работе</td>
                <td>5500-7500</td>
                <td>01.09.2017</td>
                <td>02.09.2017</td>
                <td><a href="#" class="btn btn-link active btn-xs" role="button"><u>Посмотреть</u></a></td>
            </tr>
            <tr>
                <td>Elen</td>
                <td>Туризм</td>
                <td>Курорты Мальты</td>
                <td>На доработке</td>
                <td>6000-7500</td>
                <td>05.09.2017</td>
                <td>06.09.2017</td>
                <td><a href="#" class="btn btn-link active btn-xs" role="button"><u>Посмотреть</u></a></td>
            </tr>
            <tr>
                <td>user1</td>
                <td>Эзотерика</td>
                <td>Сонник про персики</td>
                <td>Проверка</td>
                <td>3000-4500</td>
                <td>15.09.2017</td>
                <td>16.09.2017</td>
                <td><a href="#" class="btn btn-link active btn-xs" role="button"><u>Посмотреть</u></a></td>
            </tr>
            <tr>
                <td>user2</td>
                <td>Строительство</td>
                <td>Бетон Лотоса</td>
                <td>С доработки</td>
                <td>5500-7500</td>
                <td>25.09.2017</td>
                <td>26.09.2017</td>
                <td><a href="#" class="btn btn-link active btn-xs" role="button"><u>Посмотреть</u></a></td>
            </tr>
            </tbody>
        </table>
    </div>

</div><!-- .content-tables -->
