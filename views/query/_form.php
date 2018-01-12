<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Query */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="query-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'work_date')->textInput() ?>

    <?= $form->field($model, 'start_time')->textInput() ?>

    <?= $form->field($model, 'en_time')->textInput() ?>

    <?= $form->field($model, 'count_symbols')->textInput() ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>



    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
