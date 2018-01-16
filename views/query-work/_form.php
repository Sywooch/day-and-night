<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\QueryWork */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="query-work-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'text')->textarea(['id' => 'editor_text', 'rows' => 10]) ?>

    <?= $form->field($model, 'start_time')->textInput([
            'type' => 'datetime-local',
            'style' => 'width: 200px;',
    ]) ?>

    <?= $form->field($model, 'end_time')->textInput([
            'type' => 'datetime-local',
            'style' => 'width: 200px;',
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<script type="text/javascript">
    window.onload = function() {
        CKEDITOR.replace( 'editor_text' );
    };
</script>
