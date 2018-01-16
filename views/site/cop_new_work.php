<?php
/**
 * @var $model \app\models\Mission
 * User: Admin
 * Date: 16.09.2017
 * Time: 17:37
 */
?>


<?= \app\components\StatisticsWidget::widget() ?>

<?= \app\components\TransitionWidget::widget([
    'pageName' => 'Новое Задание',
    'button1' => ['НОВОСТИ', '/site/a-news'],
    'button2' => ['КОММЕНТАРИИ РЕДАКТОРА', '/site/a-comments'],
    'button3' => ['ТЕКУЩИЕ ЗАДАНИЯ', '/site/cop-works'],
    'button4' => ['ПОЛУЧИТЬ ЗАДАНИЕ', '/site/cop-get-work'],
]) ?>


<div class="content-table">
    <div class="row">
        <div class="col-xs-12">
            <table class="table btn-default">
                <thead>
                <tr>
                    <th>Название статьи</th>
                    <th>Уникальность</th>
                    <th>Объем</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><?= $model->article_name ?></td>
                    <td><?= $model->uniqueness ?></td>
                    <td>3000-3500 знаков б.п.</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Доработать до: 23.08-15:00</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div><!-- .content-table -->

<div class="content-topic">
    <div class="row">
        <div class="col-xs-6">
            <p><b>Раскрыть тему</b></p>
            <p>Сонник про персик</p>
            <ul class="a">
                <li>Введение</li>
                <li>Толкование сна различными сонниками</li>
                <li>Кому сниться сон?</li>
                <li>И далее полностью задание</li>
            </ul>
            <p><b>Запрещены фразы</b></p>
            <ul class="a"></ul><br>
        </div>
        <div class="col-xs-6">
            <p><b>Ключевые слова</b> - количество раз. Главный ключ: "".</p>
            <ul class="a">
                <li>сон - 1</li>
                <li>персик- 1</li>
                <li>мужщина - 1</li>
                <li>стол - 7</li>
            </ul>
            <dl>P.S. Слова можно видоизменять (любые формы), важно сохранить порядок слов.</dl>
        </div>
    </div>

    <div class="row"><dl>Текст задания</dl></div>

    <div class="row">
        <div class="col-xs-3">
            <a href="#" class="btn btn-info active btn-xs btn-block" role="button">" Взять задание "</a>
        </div>
        <div class="col-xs-6"></div>
        <div class="col-xs-3">
            <a href="#" class="btn btn-default active btn-xs btn-block" role="button">" Отказаться от выполнения "</a>
        </div>
    </div>
</div><br><!-- .content-topic -->

<script>
    window.onload = function() {
        //alert( 'Документ и все ресурсы загружены' );
        
    };
</script>
