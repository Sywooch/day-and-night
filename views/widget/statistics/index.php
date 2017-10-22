<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 18.09.2017
 * Time: 13:37
 */

use yii\helpers\Html;

?>


<div class="content-bal">
    <div class="row">
        <div class="col-xs-2">
            <div class="sum">
                <div class="btn-group-vertical btn-block">
                    <button type="button" class="btn btn-success active btn-xs">Текущий баланс</button>
                    <button type="button" class="btn btn-default active btn-xs">Ставка</button>
                </div>
            </div>
        </div>
        <div class="col-xs-1">
            <div class="rub">
                <div class="btn-group-vertical btn-block">
                    <button class="btn btn-success active btn-xs" role="button">00 р.</button>
                    <button class="btn btn-default active btn-xs" role="button">20 р.</button>
                </div>
            </div>
        </div>
        <div class="col-xs-2">
            <div class="cost">
                <div class="btn-group-vertical btn-block">
                    <?= Html::a('К оплате', '/site/cop-pay', [
                        'class' => 'btn btn-success active btn-xs',
                        'type' => 'button',
                    ])?>
                    <button class="btn btn-default active btn-xs" role="button">0</button>
                </div>
            </div>
        </div>
        <div class="col-xs-1"></div>
        <div class="col-xs-1">
            <div class="work-new">
                <div class="btn-group-vertical btn-block">
                    <?= Html::a('Новое', '/site/cop-new-work', [
                        'class' => 'btn btn-success active btn-xs',
                        'type' => 'button',
                    ])?>
                    <button class="btn btn-default active btn-xs" role="button">1</button>
                </div>
            </div>
        </div>
        <div class="col-xs-1">
            <div class="in-work">
                <div class="btn-group-vertical btn-block">
                    <?= Html::a('В работе', '/site/cop-in-work', [
                        'class' => 'btn btn-success active btn-xs',
                        'type' => 'button',
                    ])?>
                    <button class="btn btn-default active btn-xs" role="button">0</button>
                </div>
            </div>
        </div>
        <div class="col-xs-2">
            <div class="out-work">
                <div class="btn-group-vertical btn-block">
                    <?= Html::a('Доработать', '/site/cop-out-work', [
                        'class' => 'btn btn-success active btn-xs',
                        'type' => 'button',
                    ])?>
                    <button class="btn btn-default active btn-xs" role="button">0</button>
                </div>
            </div>
        </div>
        <div class="col-xs-2">
            <div class="test-work">
                <div class="btn-group-vertical btn-block">
                    <?= Html::a('Проверка', '#', [
                        'class' => 'btn btn-success active btn-xs',
                        'type' => 'button',
                    ])?>
                    <button class="btn btn-default active btn-xs" role="button">0</button>
                </div>
            </div>
        </div>
    </div>
</div><!-- .content-bal -->
