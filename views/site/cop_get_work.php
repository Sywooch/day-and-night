<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 16.09.2017
 * Time: 17:31
 */
?>



<?= \app\components\StatisticsWidget::widget() ?>

<?= \app\components\TransitionWidget::widget([
    'pageName' => 'Получить Задание',
    'button1' => ['НОВОСТИ', '/site/cop-news'],
    'button2' => ['КОММЕНТАРИИ РЕДАКТОРА', '/site/cop-comments'],
    'button3' => ['ТЕКУЩИЕ ЗАДАНИЯ', '/site/cop-works'],
    'button4' => ['ПОЛУЧИТЬ ЗАДАНИЕ', '/site/cop-get-work'],
]) ?>


<div class="content-get">
    <div class="row">
        <div class="col-xs-6"><h5>Запрос на получение нового задания</h5></div>
        <div class="col-xs-6"><h5>Предыдущие запросы</h5></div>
    </div>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-2">
            <a href="#" class="btn btn-warning active btn-xs btn-block" role="button">ВЫБЕРИТЕ ДАТУ</a><br />
            <a href="#" class="btn btn-warning active btn-xs btn-block" role="button">ВРЕМЯ НАЧАЛА РАБОТЫ</a><br />
            <a href="#" class="btn btn-warning active btn-xs btn-block" role="button">ВРЕМЯ СДАЧИ РАБОТЫ</a><br />
            <a href="#" class="btn btn-warning active btn-xs btn-block" role="button">КОЛИЧЕСТВО СИМВОЛОВ</a>
        </div>
        <div class="col-xs-2"></div>
        <div class="col-xs-2"></div>
        <div class="col-xs-2">
            <a href="#" class="btn btn-warning active btn-xs btn-block" role="button">ОТМЕНИТЬ</a><br />
        </div>
        <div class="col-xs-2"></div>
    </div>
</div><!-- .content-rules -->
