<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Manual */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="manual-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text')->textarea(['id' => 'editor1', 'rows' => 10]) ?>

    <?= $form->field($model, 'date_publication')->textInput(['disabled' => 'disabled']) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<script type="text/javascript">
    window.onload = function() {
        CKEDITOR.replace( 'editor1' );
    };
</script>
