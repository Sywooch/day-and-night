<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 18.09.2017
 * Time: 12:38
 */

use yii\helpers\Html;

?>


<header class="page-header">
    <div class="col-xs-6">
        <div class="slog">
            <h5>Wick Flame - “Когда человек занят делом, тогда он по-настоящему живёт”</h5>
        </div>
    </div>
    <div class="col-xs-2">
        <div class="instructions">
            <?= Html::a('" Правила "', '/site/cop-instructions', [
                'class' => 'btn btn-info active btn-xs btn-block',
                'role' => 'button',
            ])?>
        </div>
    </div>
    <div class="col-xs-2">
        <div class="profile">
            <?= Html::a('" Профиль "', '/site/cop-profile', [
                'class' => 'btn btn-info active btn-xs btn-block',
                'role' => 'button',
            ])?>
        </div>
    </div>
    <div class="col-xs-2">
        <div class="exit">
            <a href="#" class="btn active btn-xs btn-block" role="button">ВЫХОД</a>
        </div>
    </div>
</header><!-- .page-header -->

<div class="line"></div>


