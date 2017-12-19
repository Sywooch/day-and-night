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
        border: 1px solid rgba(132, 236, 255, 0.01);
        position: relative;
        margin: 5px 0 5px 0;
        padding: 5px 0 5px 0;
    }

    h1, h2, h3, h4, h5, h6 {
        color: rgb(0, 130, 210);
        font-family: 'Open Sans', serif;
        font-style: italic;
    }

    p, span {
        color: rgb(0,138,138);
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

    label, a  {
        display: inline-block;
        max-width: 100%;
        margin-bottom: 1px;
        font-weight: 100;
        font-size: 8pt;
    }


    .page-header {
        height: 80px;
        margin: 5px 0 0 0;
        padding: 0;
    }

    .slog, .login_box, .citations {
        text-align: center;
    }

    .offer, .register, .news-data{
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

    .register {
        width: 172px;
        margin: auto;
        padding: 0;
    }

    .register_form label {
        color: #333333;
        font-size: 8pt;
        cursor: default;
        width: 100%;
        margin: auto;
    }

    .register_form button {
        border: 1px solid #cccccc;
        border-radius: 2px;
        padding: 5px 0 0 0;
        width: 100%;
    }

    .register_form button[type=submit] {
        background: #0bb4eb;
        border: 5px solid #0bb4eb;
        font-size: 9pt;
        font-family: 'Open Sans', sans-serif;
        font-weight: 700;
        text-shadow: 1px 1px 1px #0bb4eb;
        color: #fff;
        border-radius: 4px;
        width: 100%;
        margin: 18px 0 17px 0;
        padding: 0;
        text-transform: uppercase;
    }

    .footer {
        background-color: rgba(132, 236, 255, 0.01);
    }

    .pull-center {
        padding-left: 40%;
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
</div>

<footer class="footer">
    <div class="line"></div>
    <p class="pull-center">
        <?= Html::a('" Читать статьи "', '/site/a-articles', [
            'class' => 'btn btn-link active btn-xs pull-left',
            'role' => 'button',
        ])?>
        <a href="#" class="btn btn-link active btn-xs pull-left" role="button">E-mail: Wick-flame@mail.ru</a>
        <a href="#" class="btn btn-link active btn-xs pull-left" role="button">" счетчик 2017 "</a>
    </p>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
