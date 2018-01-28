<?php
/**
 * @var $topics array
 * @var $topic \app\models\Topics
 * @var $auth yii\rbac\DbManager
 * @var $model \app\models\UserProfileForm
 */


use yii\bootstrap\Html;
use \app\components\StatisticsWidget;
use \app\components\TransitionWidget;
use \app\components\IsAdminWidget;
use \yii\bootstrap\ActiveForm;

?>


<?= StatisticsWidget::widget() ?>

<?= TransitionWidget::widget([
    'pageName' => 'Профиль',
    'button1' => ['НОВОСТИ', '/site/a-news'],
    'button2' => ['КОММЕНТАРИИ РЕДАКТОРА', '/site/a-comments'],
    'button3' => ['ТЕКУЩИЕ ЗАДАНИЯ', '/site/cop-works'],
    'button4' => ['ПОЛУЧИТЬ ЗАДАНИЕ', '/site/cop-get-work'],
]) ?>

<div class="content-pro">

    <div class="col-xs-6">
        <div class="content-register">
            <h5>Редактировать данные :</h5>

            <div class="register">
                <a name="register"></a>
                    <?php $form = ActiveForm::begin([
                        //'id' => 'edit-form',
                        'method' => 'POST',
                        'action' => "/site/cop-profile",
                        'fieldConfig' => [
                            'template' => "{label}{input}{error}",
                        ],
                    ]); ?>

                <div class="register_form">
                    <?= $form->field($model, 'username')->textInput() ?>
                    <?= $form->field($model, 'email')->textInput() ?>
                    <?= $form->field($model, 'skype')->textInput() ?>
                    <?= $form->field($model, 'wmr')->textInput() ?>
                    <?= Html::submitButton('Сохранить', ['name' => 'edit-form-button',]) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>

        </div>
    </div>

    <div class="col-xs-6">
        <h5>Выбери темы, в которых лучше разбираешься.</h5>
        <dl>Тебе будут приходить задания по выбранной тематике. Отметь минимум 3 позиции.</dl>
        <div class="col-xs-4"></div>
        <?= IsAdminWidget::widget(['url' => '/topics']) ?>
        <div class="col-xs-4">
            <div class="choice">
                <?php foreach ($topics as $topic): ?>

                    <?= Html::beginForm(['/site/create-topics-use'], 'post') ?>
                    <?= Html::hiddenInput('id_topic', $topic->id) ?>
                    <?= Html::submitButton($topic->name_topic, [
                        'class' => 'btn btn-warning active btn-xs btn-block',
                        'role' => 'button',
                    ]) ?>

<!--                    --><?//= Html::a(
//                        $topic->name_topic,
//                        [
//                            'class' => 'btn btn-warning active btn-xs btn-block',
//                            'role' => 'button',
////                            'onClick' => "fTopicsUse($topic->id);",
//                            'id' => 'ererrr',
//                        ]
//                    ) ?>

                    <?= Html::endForm() ?>
                <?php endforeach; ?>

            </div>
        </div>
        <div class="col-xs-4"></div>
    </div>

</div><!-- .content-pro -->

<script>
//    function fTopicsUse(id_topic) {
//        $.post("/site/createtopicsuse", function( data ) {
//            console.log( data );
//        });
//
//    window.onload = function() {
//
//        console.log( 'fgfgfgfgfg' );
//        $('#gggggggggggg').on('click', function () {
//
//            console.log( 'fgfgfgfgfg' );
//
////            $.post("/site/createtopicsuse", function( data ) {
////                console.log( data );
////            });
//        });
//    };



//    }
</script>


