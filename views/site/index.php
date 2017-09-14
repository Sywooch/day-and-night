<?php

/**
 * @var $categories array
 * @var $this yii\web\View
 * @var $val \app\models\MenuItems
 * @var $model \app\models\MenuItemsForm
 */

use \app\components\CategoryViewWidget;

$this->title = 'My Yii Application';

?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

<!--        <p class="lead">You have successfully created your Yii-powered application.</p>-->

<!--        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>-->
    </div>

    <?= CategoryViewWidget::widget() ?>
</div>

<script>

   window.onload = function () {

        df('fgh');
        treeCategoryActions.idForm = "<?= \app\models\MenuItemsForm::className() ?>";
        treeCategoryActions.init();
   };

</script>

<!-- HTML-код модалки -->
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h4 class="modal-title">Сделайте выбор</h4>
            </div>
            <?php $form = \yii\widgets\ActiveForm::begin([
                'id' => \app\models\MenuItemsForm::className(),
                'options' => [
                    'class' => 'form-horizontal',
                    'role' => 'form',
                    'method' => 'post',
                    'validateOnSubmit' => true,
                ],
            ]); ?>
                <div class="modal-body">
                    <div class="form-group">

                        <?= $form->errorSummary($model) ?>
                        <?= $form->field($model, 'name')->textInput(['placeholder' => 'Введите название категории', 'template' => '{label}{input}'])->label('Название') ?>

                        <?= $form->field($model, 'parent_id')
                            ->dropDownList($categories,
                                [
                                    'size ' => 25,
                                    'prompt' => 'Выберете категорию',
                                    'onClick' => 'treeCategoryActions.clickOnCategory(this);',
                                ])->label('Категории') ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <?= \yii\helpers\Html::submitButton('Сохранить', ['class' => 'btn btn-primary',]) ?>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
                </div>
            <?php \yii\widgets\ActiveForm::end() ?>
        </div>
    </div>
</div>
