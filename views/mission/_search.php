<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MissionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mission-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_topic') ?>

    <?= $form->field($model, 'id_author') ?>

    <?= $form->field($model, 'article_name') ?>

    <?= $form->field($model, 'uniqueness') ?>

    <?php // echo $form->field($model, 'develop_theme') ?>

    <?php // echo $form->field($model, 'empty_words') ?>

    <?php // echo $form->field($model, 'keywords') ?>

    <?php // echo $form->field($model, 'comment_view') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'date_creature') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
