<?php
/**
 * @var $instructions array
 * @var $instruction \app\models\Manual
 * @var $current \app\models\Manual
 */

use \yii\bootstrap\Html;
use \app\components\StatisticsWidget;
use \app\components\TransitionWidget;

?>

<?= StatisticsWidget::widget() ?>

<?= TransitionWidget::widget([
    'pageName' => 'Правила',
    'button1' => ['НОВОСТИ', '/site/a-news'],
    'button2' => ['КОММЕНТАРИИ РЕДАКТОРА', '/site/a-comments'],
    'button3' => ['ТЕКУЩИЕ ЗАДАНИЯ', '/site/cop-works'],
    'button4' => ['ПОЛУЧИТЬ ЗАДАНИЕ', '/site/cop-get-work'],
]) ?>

<?= \app\components\IsAdminWidget::widget(['url' => '/manual']) ?>

<div class="content-rules">

    <div class="col-xs-9">
        <?= $current->text ?>
        <div class="top-text">
            <h5>Приветствуем Вас и желаем удачи в освоении новой профессии!</h5><br>
            <p>-- Прочитайте  правила работы, изучите обозначение терминов и примените их на практике.<br>
               -- Если не получится с первого раза, не переживайте, всему можно обучиться постепенно.<br>
               -- Работа в Web-dn идеально подходит начинающим копирайтерам.<br>
               -- Требования, которые Вы видите в методичке – минимальны.<br>
               -- Если Вы их освоите, то приобретете необходимый опыт и отличный старт для дальнейшего роста в копирайтинге.<br>
               -- Быстрая обратная связь позволит автору моментально получить ответ на интересующий вопрос.<br>
               -- Не стесняйся задавать вопросы в чате или на почту : Web-dn.com<br>
            </p>
        </div>
    </div>

    <div class="col-xs-1"></div>
    <div class="col-xs-2">
        <?php foreach ($instructions as $id => $instruction): ?>
            <?= Html::a($instruction->name, "/site/a-instructions/$id", [
                'class' => 'btn btn-warning active btn-xs btn-block',
                'role' => 'button',
            ]) ?>
            <br />
        <?php endforeach; ?>
    </div>

</div><!-- .content-rules -->

