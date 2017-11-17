<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 16.09.2017
 * Time: 17:43
 */
?>



<?= \app\components\StatisticsWidget::widget() ?>

<?= \app\components\TransitionWidget::widget([
    'pageName' => 'В работе',
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
                    <td>Чем питается журавль?</td>
                    <td>до 93% по content watch</td>
                    <td>3000-3500 знаков б.п.</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Срок сдачи: 12.08 до 9:00</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div><!-- .content-table -->
</div>

<div class="content-topic">
    <div class="row">
        <div class="col-xs-6">
            <p>Раскрыть тему: Чем питаются журавли в природе?</p>
            <ul class="a">
                <li>сколько лет живет журавль</li>
                <li>описание птицы журавль</li>
                <li>можно ли есть журавля</li>
                <li>красная книга россии журавль красавка</li>
                <li>какого цвета журавли</li>
                <li>журавль описание птицы</li>
                <li>журавль красавка в какой природной зоне обитает</li>
            </ul>
            <p>Запрещены фразы</p>
            <ul class="a">
                <li>чем питаются журавли в природе</li>
                <li>сколько лет живет журавль</li>
                <li>описание птицы журавль</li>
                <li>можно ли есть журавля</li>
                <li>красная книга россии журавль красавка</li>
                <li>какого цвета журавли</li>
                <li>журавль описание птицы</li>
                <li>журавль красавка в какой природной зоне обитает</li>
            </ul>
            <p>Возможные ссылки для поиска информации:</p>
            <ul class="a">
                <li>https://zoodrug.ru/s/zhuravli.html</li>
                <li>http://pticadom.ru/zhuravl-foto-ptica-gracioznaya-i-ochen-krasivaya.html</li>
                <li>https://givotniymir.ru/zhuravl-ptica-obraz-zhizni-i-sreda-obitaniya-zhuravlya</li>
                <li>http://fb.ru/article/297931/chem-pitaetsya-juravl-v-prirode-osobennosti-i-interesnyie-faktyi</li>
                <li>https://ru.wikipedia.org/wiki/%D0%96%D1%83%D1%80%D0%B0%D0%B2%D0%BB%D0%B8%D0%BD%D1%8B%D0%B5</li>
            </ul>
        </div>
        <div class="col-xs-6">
            <p>Ключевые слова - количество раз. Главный ключ: " журавль в небе ".</p>
            <ul class="a">
                <li>Чем питается журавль	- 1</li>
                <li>какие звуки издает журавль	- 1</li>
                <li>интересные факты о журавлях	- 1</li>
                <li>журавль	- 7</li>
                <li>природа	- 1</li>
                <li>год / лет / лета	- 4</li>
                <li>жить	- 1</li>
                <li>описание	- 1</li>
                <li>птица	- 10</li>
                <li>можно	- 2</li>
                <li>ли	- 1</li>
                <li>быть / есть	- 4</li>
                <li>красный / красная	- 1</li>
                <li>книга	- 1</li>
                <li>россия	- 2</li>
                <li>красавка	- 5</li>
                <li>цвет / цвета	- 1</li>
                <li>интересный	- 2</li>
                <li>факт	- 2</li>
                <li>обитать -1</li>
            </ul>
            <p>P.S. Слова можно видоизменять (любые формы), важно сохранить порядок слов.</p>
        </div>
    </div>
</div>

<div class="article-text">
    <div class="col-xs-5">
        <a href="#" class="btn btn-info active btn-xs btn-block" role="button">" Редактор "</a>
        <div class="layerP">
            <h5>Чем питается журавль?</h5>
            <p>текст</p>
        </div>
        <a href="#" class="btn btn-default btn-xs btn-block" role="button">" Отказаться от выполнения "</a>
    </div>
    <div class="col-xs-2"></div>
    <div class="col-xs-5">
        <a href="#" class="btn btn-primary btn-xs btn-block" role="button">" Прикрепить скришноит уникальности "</a>
        <div class="layerK">
            <h5>Чем питается журавль?</h5>
            <p>текст</p>
        </div>
        <a href="#" class="btn btn-primary btn-xs btn-block" role="button">" Отправить на проверку "</a>
    </div>
    <dl>Написано знаков: 1293 б/п. Перед отправкой проверьте,все ли требования ТЗ ыполнены, и прикрепите скриншот уникальности;</dl>
</div><!-- .article-text -->
