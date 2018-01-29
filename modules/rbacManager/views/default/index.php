<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel \app\modules\rbacManager\models\AuthItemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Менеджер прав доступа';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="mission-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать правило', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

<!--    <!-- Split button -->
<!--    <div class="btn-group">-->
<!--        <button type="button" class="btn btn-primary">Действие</button>-->
<!--        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">-->
<!--            <span class="caret"></span>-->
<!--            <span class="sr-only">Меню с переключением</span>-->
<!--        </button>-->
<!--        <ul class="dropdown-menu" role="menu">-->
<!--            <li><a href="#">Действие</a></li>-->
<!--            <li><a href="#">Другое действие</a></li>-->
<!--            <li><a href="#">Что-то иное</a></li>-->
<!--            <li class="divider"></li>-->
<!--            <li><a href="#">Отдельная ссылка</a></li>-->
<!--        </ul>-->
<!--    </div>-->

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'name',
                'contentOptions' =>function ($model, $key, $index, $column){
                    return ['style' => 'width: 150px;text-align: center;'];
                },
            ],
            'description',
            [
                'attribute' => 'type',
                'label' => 'В СЕБЯ ВКЛЮЧАЕТ',
                'value' => function ($data) {
                    return $data->type;
                },

                /** @var $data \app\modules\rbacManager\models\AuthItemSearch */
                'content' => function ($data) {

                    $rows = '';
                    $buttonName = 'Действия';
                    $typeColor = 'primary';
                    $url = "rbacManager/auth-item/view";

                    $span = Html::tag('span', count($data->children), ['class' => 'textCaret', 'style' => 'color: white;']);;
                    $span .= Html::tag('span', '', ['class' => 'caret', 'style' => 'color: white;']);
                    $span .= Html::tag('span', 'Меню с переключением', ['class' => 'sr-only']);
                    $content = Html::tag('button', $buttonName . Html::tag('button', $span, [
                            'class' => "btn btn-$typeColor dropdown-toggle",
                            'data-toggle' => 'dropdown',
                        ]), [
                        'class' => "btn btn-$typeColor",
                        'type' => 'button',
                        'data-toggle' => 'dropdown',
                    ]);

                    /** @var \app\modules\rbacManager\models\AuthItemSearch $children */
                    foreach ($data->children as $children){
                        $name = $children->rule_name ?: ($children->description ?: $children->name);
                        $rows .= Html::tag('li', Html::a($name, "/$url/$children->name", ['class' => 'category-RBAC']));
                    }

                    $content .= Html::tag('ul', $rows, ['class' => 'dropdown-menu', 'role' => 'menu']);
                    $content = Html::tag('div', $content, ['class' => 'btn-group']);

                    return $content;
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
