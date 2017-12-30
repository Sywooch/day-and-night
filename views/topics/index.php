<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TopicsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Темы';
$this->params['breadcrumbs'][] = $this->title;

?>

<style>
    a.button15 {
        display: inline-block;
        font-family: arial,sans-serif;
        font-size: 11px;
        font-weight: bold;
        color: rgb(28, 111, 39);
        text-decoration: none;
        user-select: none;
        padding: .2em 1.2em;
        outline: none;
        border: 1px solid rgba(0,0,0,.1);
        border-radius: 2px;
        background: rgb(21, 239, 20) linear-gradient(rgba(33, 169, 52, 0.52), rgba(36, 195, 41, 0.34));
        transition: all .218s ease 0s;
    }
    a.button15:hover {
        color: rgb(24,24,24);
        border: 1px solid rgb(198,198,198);
        background: rgb(21, 239, 20) linear-gradient(rgba(33, 169, 52, 0.52), rgba(36, 195, 41, 0.34));
        box-shadow: 0 1px 2px rgba(0,0,0,.1);
    }
    a.button15:active {
        color: rgb(51,51,51);
        border: 1px solid rgb(204,204,204);
        background: rgb(21, 239, 20) linear-gradient(rgba(33, 169, 52, 0.52), rgba(36, 195, 41, 0.34));
        box-shadow: 0 1px 2px rgba(0,0,0,.1) inset;
    }
    a.button15:focus:not(:active) {
        border: 1px solid rgb(22,32,43);
        border-bottom: 1px solid rgb(25,34,45);
        background: rgb(53,61,71);
        box-shadow:
                inset 0 1px 3px rgba(0,10,20,.5),
                0 1px rgb(83,94,104),
                0 0 1px rgb(86,96,106);
        pointer-events: none;
    }

    a.button17 {
        display: inline-block;
        font-family: arial,sans-serif;
        font-size: 11px;
        color: rgb(205,216,228);
        text-shadow: 0 -1px rgb(46,53,58);
        text-decoration: none;
        user-select: none;
        line-height: 2em;
        padding: 1px 1.2em;
        outline: none;
        border: 1px solid rgba(33,43,52,1);
        border-radius: 3px;
        background: rgb(81,92,102) linear-gradient(rgb(81,92,102), rgb(69,78,87));
        box-shadow:
                inset 0 1px rgba(101,114,126,1),
                inset 0 0 1px rgba(140,150,170,.8),
                0 1px rgb(83,94,104),
                0 0 1px rgb(86,96,106);
    }
    a.button17:active {
        box-shadow:
                inset 0 1px 3px rgba(0,10,20,.5),
                0 1px rgb(83,94,104),
                0 0 1px rgb(86,96,106);
    }
    a.button17:focus:not(:active) {
        border: 1px solid rgb(22,32,43);
        border-bottom: 1px solid rgb(25,34,45);
        background: rgb(53,61,71);
        box-shadow:
                inset 0 1px 3px rgba(0,10,20,.5),
                0 1px rgb(83,94,104),
                0 0 1px rgb(86,96,106);
        pointer-events: none;
    }


    a.button21 {
        display: inline-block;
        width: 2em;
        height: 2em;
        line-height: 2em;
        vertical-align: middle;
        text-align: center;
        text-decoration: none;
        user-select: none;
        color: rgb(0,0,0);
        outline: none;
        border: 1px solid rgba(0,0,0,.4);
        border-top-color: rgba(0,0,0,.3);
        border-radius: 2px;
        background: linear-gradient(rgb(255,255,255), rgb(240,240,240));
        box-shadow:
                0 0 3px rgba(0,0,0,0) inset,
                0 1px 1px 1px rgba(255,255,255,.2),
                0 -1px 1px 1px rgba(0,0,0,0);
        transition: .2s ease-in-out;
    }
    a.button21:hover:not(:active) {
        box-shadow:
                0 0 3px rgba(0,0,0,0) inset,
                0 1px 1px 1px rgba(0,255,255,.5),
                0 -1px 1px 1px rgba(0,255,255,.5);
    }
    a.button21:active {

        background: linear-gradient(rgb(250,250,250), rgb(235,235,235));
        box-shadow:
                0 0 3px rgba(0,0,0,.5) inset,
                0 1px 1px 1px rgba(255,255,255,.4),
                0 -1px 1px 1px rgba(0,0,0,.1);
        transition: .2s ease-in-out;
    }

    a.button21{
        display: inline-block;
        width: 2em;
        height: 2em;
        line-height: 2em;
        vertical-align: middle;
        text-align: center;
        text-decoration: none;
        user-select: none;
        color: rgb(0,0,0);
        outline: none;
        border: 1px solid rgba(0,0,0,.4);
        border-top-color: rgba(0,0,0,.3);
        border-radius: 2px;
        background: linear-gradient(rgba(62, 197, 129, 0.58), rgba(120, 222, 138, 0.68));
        box-shadow: 0 0 3px rgba(33, 202, 44, 0.4) inset, 0px 5px 9px 7px rgba(41, 243, 9, 0.4), 0px -2px 8px 7px rgba(21, 212, 35, 0.35);
        transition: .2s ease-in-out;
    }

    a.button21.button21O{
        margin-left: -3px;
    }
</style>

<a href="#" class="button15">Ok</a>

<a href="#" class="button15 button15O">Off</a>

<br> <br> <br>

<a href="#" class="button17" tabindex="0">Ok</a>

<a href="#" class="button17 button17O" tabindex="0">Off</a>

<br> <br> <br>

<a href="#" class="button21">Ok</a>

<a href="#" class="button21 button21O">Off</a>

<div class="topics-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать тему', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name_topic',
            [
                'attribute' => 'status',
                'label' => 'Статус',
                'value' => function ($data) {
                    return $data->id_author;
                },
                'content' => function ($data) {
                    $status = ['Off', 'Ok'];
                    $style = $data->status ? 'color: green;' : 'color: red;';

                    return "<span style='font-weight: 700;$style'>" . $status[$data->status] . "</span>";
                },
                'contentOptions' =>function ($model, $key, $index, $column){
                    return ['style' => 'width: 50px;text-align: center;',];
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
