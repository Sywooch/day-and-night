<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link href='http://fonts.googleapis.com/css?family=Philosopher&subset=cyrillic' rel='stylesheet' type='text/css'>
</head>
<body>
<?php $this->beginBody() ?>



<style>

    body {
        background-color: rgba(132, 236, 255, 0.33);
        font-family: 'Open Sans', serif;
        font-size: 1.3rem;
    }

    [class*="col-"] {
        border: 3px solid rgba(132, 236, 255, 0.01);
        position: relative;
        margin: 5px 0 5px 0;
        padding: 5px 0 5px 0;
    }

    h1, h3, h5 {
        color: rgb(0, 130, 130);
        font-family: 'Open Sans', serif;
        font-style: normal;
    }

    h2 {
        color: rgb(2, 2, 150);
        font-family: 'Open Sans', serif;
        font-style: normal;
    }

    h4, h6 {
        color: rgb(0, 130, 210);
        font-family: 'Open Sans', serif;
        font-style: normal;
    }

    p {
        color: rgb(39, 39, 150);
        font-family: 'Open Sans', serif;
        font-size: 10pt;
    }

    span {
        color: rgb(0, 0, 36);
        font-family: 'Open Sans', serif;
        font-size: 10pt;
    }


    .line {
        width: 95%;
        border-top: 1px solid rgb(255, 0, 0);
        margin: -21px 0 0 -47.5%;
        left: 50%;
        position: absolute;
    }


    ul.a {
        list-style-type: circle;
    }


    label, a {
        color: rgb(0, 0, 36);
        display: inline-block;
        max-width: 100%;
        margin-bottom: 1px;
        font-weight: 100;
        font-size: 10pt;
    }

    .some label, .some a {
        font-size: 9pt;
        color: rgb(11, 69, 78);
    }

    .layerP, .layerK {
        background-color: rgb(234, 252, 255);
        overflow: scroll; /* Добавляем полосы прокрутки */
        width: 100%; /* Ширина блока */
        height: 200px; /* Высота блока */
        padding: 5px; /* Поля вокруг текста */
        border: solid 1px black; /* Параметры рамки */
    }

    .layerD {
        background-color: rgb(234, 252, 255);
        overflow: scroll; /* Добавляем полосы прокрутки */
        width: 100%; /* Ширина блока */
        height: 200px; /* Высота блока */
        padding: 5px; /* Поля вокруг текста */
        border: solid 1px black; /* Параметры рамки */
    }


    .page-header-reg{
        height: 80px;
        margin: 0 0 0 0;
        padding: 0 0 0 0;

    }

    .page-header {
        height: 90px;
        margin: 0 0 0 0;
        padding: 10px 0 0 0;
    }

    .slog, .citations, .login_box {
        text-align: center;
    }

    .ef, .entrance {
        height: 25px;
        padding: 0 3px 0;
        font-size: 9pt;
        width: 180px;
    }

    .offer, .register, .read-data{
        text-align: center;
    }

    .open-now {
        color: rgb(0, 120, 240);
        font-family: 'Open Sans', serif;
    }

    .article-left {
        padding-right: 5px;
    }

    .article-right {
        padding-left: 5px;
    }

    .content-pro {
        text-align: center;
    }

    .content-get {
        text-align: center;
    }

    .comments-title{
        color: rgb(240, 6, 14);
    }

    .register {
        width: 180px;
        margin: auto;
        padding: 0;
    }

    .form-group {
        margin-bottom: 7px;
    }

    p.help-block {
        display: block;
        margin-top: 1px;
        margin-bottom: 1px;
        color: #737373;
        font-size: 8pt;
    }

    .register_form .form-control {
        height: 25px;
        padding: 1px 7px;
        font-size: 13px;
    }

    .register_form label {
        color: #333333;
        font-size: 8pt;
        cursor: default;
        width: 100%;
        margin: auto;
        height: 10px;

    }

    .register_form button {
        border: 1px solid #cccccc;
        border-radius: 2px;
        padding: 5px 0 0 0;
        width: 100%;
        height: 25px;
    }

    .register_form button[type=submit] {
        background: #0bb4eb;
        border: 1px solid #0bb4eb;
        font-size: 9pt;
        font-family: 'Open Sans', sans-serif;
        font-weight: 700;
        text-shadow: 1px 1px 1px #0bb4eb;
        color: #fff;
        border-radius: 3px;
        width: 100%;
        margin: 10px 0 0 0;
        padding: 0;
        text-transform: uppercase;
    }

    .footer {
        background-color: rgba(132, 236, 255, 0.01);
    }

    .pull-center {
        padding-left: 40%;
    }

    .choice .btn-warning {
        background-image: none;
        margin-bottom: 10px;
    }

    .a_edit{
        color: rgba(255, 0, 0, 0.51);
        font-weight: 600;
        font-size: 15px;
    }
    .a_edit:hover {
        -webkit-animation: swing 0.6s ease;
        animation: swing 0.6s ease;
        -webkit-animation-iteration-count: 1;
        animation-iteration-count: 1;
        color: rgba(255, 0, 0, 0.95);
        text-decoration: none;
    }
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
        width: 1em;
        height: 1em;
        line-height: 1em;
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
        box-shadow: 0 0 3px rgba(33, 202, 44, 0.4) inset, 1px 5px 9px 7px rgba(41, 243, 9, 0.4), 1px -2px 8px 7px rgba(21, 212, 35, 0.35);
        transition: .2s ease-in-out;
    }

    a.button21.button21O{
        margin-left: -3px;
    }


    .drop-menu{
        position: fixed;
        background: rgb(10, 140, 150);
        border-radius: 20px 0 0 20px;
        top: 133px;
        right: -180px;
        transition: 1s;
        height: 135px;

    }

    .drop-menu:hover{
        right: 0;
        transition: 1.5s;
        height: inherit;
        width: 300px;
    }

    .flashing-link li:hover,
    .flashing-link li:focus {
        text-decoration: none;
        background-color: #eee;
    }



    .flashing-link li a {
        font-size: 10pt;
        color: #020296;
    }

    .drop-menu:hover .menu_block.button-M h2{
        opacity: 0.3;
        transition: 2s;
    }

    .drop-menu .menu_block.button-M h2{
        margin: 2px 50px 45px 10px;
        transition: 2s;
    }

    .menu-tabs{
        margin-left: 55px;
        color: rgb(234, 252, 255);
        font-size: 5pt;
    }



    .button-M{
        -moz-transform: rotate(-90deg); /* Для Firefox */
        -ms-transform: rotate(-90deg); /* Для IE */
        -webkit-transform: rotate(-90deg); /* Для Safari, Chrome, iOS */
        -o-transform: rotate(-90deg); /* Для Opera */
        transform: rotate(-90deg);
    }

    .menu_block.button-M{
        position: absolute;
        top: 50%;
        margin-top: -60px;
        left: -40px;
    }

    .drop-menu .menu_block.menu-tabs .nav.nav-stacked{
        opacity: 0;
    }

    .drop-menu:hover .menu_block.menu-tabs .nav.nav-stacked {
        opacity: 1;

    }


    a.category-RBAC {
        font-size: 9pt;

    }

    a.category-RBAC:hover {
        font-size: 14pt;
        transition: 0.1s;
    }


</style>


<div class="wrap">
<!--    --><?php
//    NavBar::begin([
//        'brandLabel' => 'My Company',
//        'brandUrl' => Yii::$app->homeUrl,
//        'options' => [
//            'class' => 'navbar-inverse navbar-fixed-top',
//        ],
//    ]);
//    echo Nav::widget([
//        'options' => ['class' => 'navbar-nav navbar-right'],
//        'items' => [
//            ['label' => 'Home', 'url' => ['/site/index']],
//            ['label' => 'About', 'url' => ['/site/about']],
//            ['label' => 'Contact', 'url' => ['/site/contact']],
//            Yii::$app->user->isGuest ? (
//                ['label' => 'Login', 'url' => ['/site/login']]
//            ) : (
//                '<li>'
//                . Html::beginForm(['/site/logout'], 'post')
//                . Html::submitButton(
//                    'Logout (' . Yii::$app->user->identity->username . ')',
//                    ['class' => 'btn btn-link logout']
//                )
//                . Html::endForm()
//                . '</li>'
//            )
//        ],
//    ]);
//    NavBar::end();
//    ?>

    <div class="container-fluid">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>

        <?= \app\components\RegistrationWidget::widget() ?>
<!--        --><?//= \app\components\StatisticsWidget::widget() ?>
<!--        --><?//= \app\components\TransitionWidget::widget() ?>

        <?= $content ?>
    </div>

    <?php if(Yii::$app->controller->id != 'site'): ?>

        <?= \app\components\MenuWidget::widget() ?>

    <?php endif; ?>

</div>



<footer class="footer">
    <div class="line"></div>
    <p class="pull-center">

        <?php if(!Yii::$app->user->isGuest): ?>

            <?= Html::a(' < читать статьи > ', '/site/a-articles', [
                'class' => 'btn btn-link active btn-xs pull-left',
                'role' => 'button',
            ])?>

        <?php endif; ?>

        <a href="#" class="btn btn-link active btn-xs pull-left" role="button">' e-mail '</a>
        <a href="#" class="btn btn-link active btn-xs pull-left" role="button">' счетчик ' ></a>
    </p>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
