<?php
/**
 * @var $items array
 * @var $news \app\models\Manual
 * @var $current \app\models\Manual
 */

use yii\bootstrap\Html;

function alert ($i){
        $a = [
            'success',
            'info',
            'warning',
        ];

        if($i > 2){
            $i = 0;
            $alert = $a[$i];
        } else {
            $alert = $a[$i];
            $i++;
        }

        return [$i, $alert];
}

$i = 0;

?>

<?= \app\components\StatisticsWidget::widget() ?>

<?= \app\components\TransitionWidget::widget([
    'pageName' => 'Новости',
    'button1' => ['НОВОСТИ', '/site/a-news'],
    'button2' => ['КОММЕНТАРИИ РЕДАКТОРА', '/site/a-comments'],
    'button3' => ['ТЕКУЩИЕ ЗАДАНИЯ', '/site/cop-works'],
    'button4' => ['ПОЛУЧИТЬ ЗАДАНИЕ', '/site/cop-get-work'],
]) ?>

<?= \app\components\IsAdminWidget::widget(['url' => '/news']) ?>

<div class="content-news">

    <div class="col-xs-12">
        <?php foreach ($items as $news): ?>
            <?php $alert = alert($i); $i = $alert[0];?>

            <div class="alert alert-<?= $alert[1] ?>" role="alert">
                <a href="#" class="alert-link">
                    <?= $news->text ?>
                </a>
                <p>Дата публикации: <?= (new DateTime($news->date_publication))->format('d/m') ?></p>
            </div>

        <?php endforeach; ?>
    </div>

</div><!-- .content-news -->
