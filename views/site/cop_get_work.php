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

    <div class="col-xs-6">
        <h5>Запрос на получение нового задания</h5>
        <div class="col-xs-2"></div>

        <div class="col-xs-8">
            <div class="job-request">

                <?php $form = ActiveForm::begin([
                    'id' => 'form-query',
                    'method' => 'POST',
                    'fieldConfig' => [
                        'template' => "<div class='col-md-8'><a href=\"#\" class=\"btn btn-warning active btn-md btn-block\" role=\"button\" style='text-transform: uppercase;'>{label}</a></div><div class='col-md-4'>{input}{error}</div>",
                        'labelOptions' => ['style' => 'font-size: 8pt;'],
                    ],
                ]); ?>

                <?= $form->field($model, 'work_date')->textInput([
                    'id' => 'calendar',
                    'value' => $model->work_date ?: (new DateTime())->format('d-m-Y'),
                ]) ?>

                <?= $form->field($model, 'start_time')->textInput([
                    'type' => 'time',
                    'value' => $model->start_time ?: (new DateTime())->format('H:i'),
                ]) ?>

                <?= $form->field($model, 'en_time')->textInput([
                    'type' => 'time',
                    'value' => $model->en_time ?: (new DateTime())->modify('+9 hour')->format('H:i'),
                ]) ?>

                <?= $form->field($model, 'count_symbols')->textInput([
                    'value' => '0',
                ]) ?>

                <?= \yii\bootstrap\Html::submitButton('ПОДАТЬ ЗАЯВКУ', [
                    'class' => 'btn btn-warning active btn-sm btn-block',
                ]) ?>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
        <div class="col-xs-2"></div>
    </div>

    <div class="col-xs-6">
        <h5>Предыдущие запросы</h5>
        <div class="col-xs-3"></div>
        <div class="col-xs-6">
            <div class="past-requests">

                <?php foreach ($requests as $request): ?>

                <p>" <?= $request->work_date ?> " Количество символов: <?= $request->count_symbols ?></p>

                <?= \app\models\Status::getLabel($request->status) ?><br>

                <?= \yii\bootstrap\Html::a('ОТМЕНИТЬ', ['/query/delete', 'id' => $request->id], [
                    'class' => 'btn btn-default active btn-sm btn-block',
                    'data' => [
                        'confirm' => 'Вы точно хотите отменить заявку на задание?',
                        'method' => 'post',
                    ],
                ]) ?><br>

                <?php endforeach; ?>

            </div>
        </div>
        <div class="col-xs-3"></div>
    </div>

</div><!-- .content-get -->

<script type="text/javascript">
    window.onload = function() {
        $('#calendar').simpleDatepicker();  // Привязать вызов календаря к полю с CSS идентификатором #calendar
    }
</script>
