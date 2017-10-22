<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 16.09.2017
 * Time: 16:55
 */
?>

<?= \app\components\StatisticsWidget::widget() ?>

<?= \app\components\TransitionWidget::widget([
    'pageName' => 'Новости',
    'button1' => ['НОВОСТИ', '/site/cop-news'],
    'button2' => ['КОММЕНТАРИИ РЕДАКТОРА', '/site/cop-comments'],
    'button3' => ['ТЕКУЩИЕ ЗАДАНИЯ', '/site/cop-works'],
    'button4' => ['ПОЛУЧИТЬ ЗАДАНИЕ', '/site/cop-get-work'],
]) ?>


<div class="content-news">
    <div class="row">
        <div class="col-xs-12">
            <div class="alert alert-success" role="alert">
                <a href="#" class="alert-link">
                    У нас всё хорошо. С сегодняшнего дня по вопросам,
                    связанным с заданиями обращайтесь в Slack - elen_777.
                </a>
                <p>Дата публикации: 11/08</p>
            </div>
            <div class="alert alert-info" role="alert">
                <a href="#" class="alert-link">
                    Внимание! Появилась новая тема: Астрология.
                    Все желающие получать задания на данную тематику,
                    поставьте галочку напротив Астрологии в разделе «Мой профиль».
                </a>
                <p>Дата публикации: 31/08</p>
            </div>
            <div class="alert alert-warning" role="alert">
                <a href="#" class="alert-link">
                    Главн. редактора не будет в сети с 13:30 до 15:00,
                    по всем вопросам обращайтесь на почту: Verona2015@bk.ru
                </a>
                <p>Дата публикации: 08/09</p>
            </div>
        </div>
    </div>
</div><!-- .content-news -->
