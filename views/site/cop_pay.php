<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 16.09.2017
 * Time: 17:44
 */
?>


<?= \app\components\StatisticsWidget::widget() ?>

<?= \app\components\TransitionWidget::widget([
    'pageName' => 'К оплате',
    'button1' => ['НОВОСТИ', '/site/a-news'],
    'button2' => ['КОММЕНТАРИИ РЕДАКТОРА', '/site/a-comments'],
    'button3' => ['ТЕКУЩИЕ ЗАДАНИЯ', '/site/cop-works'],
    'button4' => ['ПОЛУЧИТЬ ЗАДАНИЕ', '/site/cop-get-work'],
]) ?>



<div class="content-tables">
    <div class="row">
        <div class="col-xs-12">
            <table class="table table-bordered btn-default">
                <thead>
                <tr>
                    <th>Пользователь</th>
                    <th>Тематика</th>
                    <th>Название</th>
                    <th>К-во символов</th>
                    <th>Оценка</th>
                    <th>Комментарии</th>
                    <th>Доработка</th>
                    <th>К оплате</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Nika</td>
                    <td>Сад и огород</td>
                    <td>Королевские помидоры</td>
                    <td>5500</td>
                    <td>Хорошо</td>
                    <td>Не хватает...</td>
                    <td>02.09.2017</td>
                    <td>70 р.</td>
                </tr>
                <tr>
                    <td>Nika</td>
                    <td>Туризм</td>
                    <td>Новая Зеландия</td>
                    <td>15500</td>
                    <td>Отлично</td>
                    <td>Статья написана великолепно</td>
                    <td>б/д</td>
                    <td>90 р.</td>
                </tr>
                <tr>
                    <td>Nika</td>
                    <td>Домашние животные</td>
                    <td>Почему собаки скучают?</td>
                    <td>4500</td>
                    <td>Хорошо</td>
                    <td>Не полностью...</td>
                    <td>02.09.2017</td>
                    <td>110 р.</td>
                </tr>
                <tr>
                    <td>Nika</td>
                    <td>Медицина</td>
                    <td>«Лазолван» - назначение</td>
                    <td>6000</td>
                    <td>Хорошо</td>
                    <td>Плохая уникальность...</td>
                    <td>02.09.2017</td>
                    <td>130 р.</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div><!-- .content-tables -->
