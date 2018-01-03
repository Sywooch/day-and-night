<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Mission */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mission-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_topic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'article_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uniqueness')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'develop_theme')->textarea(['id' => 'editor_develop_theme', 'rows' => 10]) ?>

    <?= $form->field($model, 'empty_words')->textarea(['id' => 'editor_empty_words', 'rows' => 10]) ?>

    <?= $form->field($model, 'keywords')->textarea(['id' => 'editor_keywords', 'rows' => 10]) ?>

    <?= $form->field($model, 'comment_view')->textarea(['id' => 'editor_comment_view', 'rows' => 10]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_creature')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<script type="text/javascript">
    window.onload = function() {
        CKEDITOR.replace( 'editor_develop_theme' );
        CKEDITOR.replace( 'editor_empty_words' );
        CKEDITOR.replace( 'editor_keywords' );
        CKEDITOR.replace( 'editor_comment_view' );
    };
</script>
