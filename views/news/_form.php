<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Users;

$author = Users::findOne(Yii::$app->getUser()->getId());

?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_author')->hiddenInput([
        'value' => $author->id,
    ]) ?>

    <?= Html::input('text', 'author', $author->username, ['disabled' => 'disabled']) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date_publication')->textInput(['disabled' => 'disabled']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
