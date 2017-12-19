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

<style>
    .a_edit{
        color: rgba(255, 0, 0, 0.51);
        font-weight: 600;
        font-size: 15px;
    }
    .a_edit:hover {
        -webkit-animation: swing 0.6s ease;
        animation: swing 0.6s ease;
        -webkit-animation-iteration-count: 1;
        animation-iteration-count: 1;
        color: rgba(255, 0, 0, 0.95);
        text-decoration: none;
    }
</style>

<?= StatisticsWidget::widget() ?>

<?= TransitionWidget::widget([
    'pageName' => 'Правила',
    'button1' => ['НОВОСТИ', '/site/a-news'],
    'button2' => ['КОММЕНТАРИИ РЕДАКТОРА', '/site/a-comments'],
    'button3' => ['ТЕКУЩИЕ ЗАДАНИЯ', '/site/cop-works'],
    'button4' => ['ПОЛУЧИТЬ ЗАДАНИЕ', '/site/cop-get-work'],
]) ?>

<?php if(\Yii::$app->user->can('admin')): ?>
    <?= Html::a('ред./new', '/manual', [
        'class' => 'a_edit',
    ]) ?>
<?php endif; ?>

<div class="content-rules">
    <div class="row">
        <div class="col-xs-8">
            <?= $current->text ?>
        </div>

        <h5>Приветствуем Вас и желаем удачи в освоении новой профессии!</h5>
        <p>Прочитайте  правила работы, изучите обозначение терминов и примените их на практике.
            Если не получится с первого раза – не переживайте, всему можно обучиться.<br>
            Работа в Wick Flame – идеально подходит начинающим копирайтерам. Требования, которые Вы видите в методичке – минимальны.<br>
            Если их освоите, то Вы приобретете необходимый опыт и отличный старт для дальнейшего развития в сфере копирайтинга.<br>
            Быстрая обратная связь позволит автору моментально получить ответ на интересующий вопрос.<br>
            Не стесняйся задавать вопросы в чате или на почту : Wick-flame@mail.ru
        </p>

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
        <div class="col-xs-1"></div>
    </div>
</div><!-- .content-rules -->

