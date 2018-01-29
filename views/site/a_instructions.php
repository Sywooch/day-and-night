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

<div class="col-xs-12">
    <?= \app\components\IsAdminWidget::widget(['url' => '/manual']) ?>
</div>

<div class="content-rules">

    <div class="col-xs-9">
        <div class="top-text">
            <?= $current->text ?>
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

