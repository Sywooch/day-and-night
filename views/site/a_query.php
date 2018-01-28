<?php
/**
 * @var $queries array.
 * @var $query \app\models\Query
 * Date: 16.09.2017
 * Time: 16:15
 */
?>


<div class="content-bal">

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

</div><!-- .content-bal-->


<?= \app\components\TransitionWidget::widget([
    'pageName' => 'Пользователи',
    'button1' => ['НОВОСТИ', '/site/a-news'],
    'button2' => ['Оставить Комментарий', '/site/a-comments'],
    'button3' => ['Пользователи', '/site/a-red'],
    'button4' => ['Добавить "Запросы"', '/site/cop-new-work'],
]) ?>



<div class="content-tables">

    <div class="col-xs-12">
        <div class="job-query">
            <table class="table table-bordered btn-default">
                <thead>
                <tr>
                    <th>Пользователи</th>
                    <th>Выбраная дата</th>
                    <th>Время начала работы</th>
                    <th>Время сдачи работы</th>
                    <th>Количество символов</th>
                    <th>Статус</th>
                    <th>Дата создание запроса</th>
                    <th>Действия</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($queries as $query): ?>
                    <tr>
                        <td><?= $query->author->username ?></td>
                        <td><?= $query->work_date ?></td>
                        <td><?= $query->start_time ?></td>
                        <td><?= $query->en_time; ?></td>
                        <td><?= $query->count_symbols ?></td>
                        <td><?= $query->status ?></td>
                        <td><?= $query->date_query ?></td>
                        <td><a href="#" class="btn btn-link active btn-xs" role="button"><u>Посмотреть</u></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div><!-- .content-tables -->
