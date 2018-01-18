<?php


use \yii\bootstrap\ActiveForm;

?>



<?= \app\components\StatisticsWidget::widget() ?>

<?= \app\components\TransitionWidget::widget([
    'pageName' => 'Получить Задание',
    'button1' => ['НОВОСТИ', '/site/a-news'],
    'button2' => ['КОММЕНТАРИИ РЕДАКТОРА', '/site/a-comments'],
    'button3' => ['ТЕКУЩИЕ ЗАДАНИЯ', '/site/cop-works'],
    'button4' => ['ПОЛУЧИТЬ ЗАДАНИЕ', '/site/cop-get-work'],
]) ?>


<div class="content-get">
    <div class="get-header">
        <div class="col-xs-6"><h5>Запрос на получение нового задания</h5></div>
        <div class="col-xs-6"><h5>Предыдущие запросы</h5></div>
    </div>

    <div class="get-work">
        <div class="col-xs-2"></div>
        <div class="col-xs-6">
            <?php $form = ActiveForm::begin([
                'id' => 'form-query',
                'method' => 'POST',
                'fieldConfig' => [
                    'template' => "<div class='row'><div class='col-xs-4'><a href=\"#\" class=\"btn btn-warning active btn-xs btn-block\" role=\"button\" style='text-transform: uppercase;'>{label}</a></div><div class='col-xs-3'>{input}{error}</div></div>",
                    'labelOptions' => ['style' => 'font-size: 10pt;'],
                ],
            ]); ?>

            <?= $form->field($model, 'work_date')->textInput([
                'id' => 'calendar',
                'value' => $model->work_date ?: (new DateTime())->format('d-m-Y'),
                'style' => 'margin-top: -6px;',
            ]) ?>

            <?= $form->field($model, 'start_time')->textInput([
                'type' => 'time',
                'value' => $model->start_time ?: (new DateTime())->format('H:i'),
                'style' => 'margin-top: -6px; width: 100px;',
            ]) ?>

            <?= $form->field($model, 'en_time')->textInput([
                'type' => 'time',
                'value' => $model->en_time ?: (new DateTime())->modify('+9 hour')->format('H:i'),
                'style' => 'margin-top: -6px; width: 100px;',
            ]) ?>

            <?= $form->field($model, 'count_symbols')->textInput([
                'value' => '0',
                'style' => 'margin-top: -6px; width: 100px;',
            ]) ?>

            <?= \yii\bootstrap\Html::submitButton('Подать заявку', [
                'class' => 'btn btn-warning active btn-xs btn-block',
                'style' => 'width: 365px; height: 30px; font-size: 12pt; text-transform: uppercase;',
            ]) ?>

            <?php ActiveForm::end(); ?>

        </div>

        <div class="col-xs-2"></div>
        <div class="col-xs-2"></div>
        <div class="col-xs-2">
            <?php foreach ($requests as $request): ?>
                <?= $request->work_date ?> . . . Кол. символов - <?= $request->count_symbols ?>
                <?= \app\models\Status::getLabel($request->status) ?>
                <?= \yii\bootstrap\Html::a('ОТМЕНИТЬ', ['/query/delete', 'id' => $request->id], [
                    'class' => 'btn btn-warning active btn-xs btn-block',
                    'data' => [
                        'confirm' => 'Вы точно хотите отменить заявку на задание?',
                        'method' => 'post',
                    ],
                ]) ?>
                <br />
            <?php endforeach; ?>
        </div>
        <div class="col-xs-2"></div>
    </div>
</div><!-- .content-rules -->

<script type="text/javascript">
    window.onload = function() {
        $('#calendar').simpleDatepicker();  // Привязать вызов календаря к полю с CSS идентификатором #calendar
    }
</script>
