<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 18.09.2017
 * Time: 12:38
 */
?>

<header class="page-header">
    <div class="row">
        <div class="col-xs-6">
            <div class="slog">
                <h5>Wick Flame - Постоянная и надежная работа для копирайтеров</h5>
            </div>
        </div>
        <div class="col-xs-6">
            <div class="login_box">
                <form action="/index.php?r=user/login" method="POST">
                    <!--<input type="text" placeholder="Логин" class="ef">-->
                    <input class="ef" placeholder="e-mail" type="text" value="" name="email" id="email" />
                    <!--<input type="password" placeholder="Пароль" class="ef">-->
                    <input class="ef" placeholder="пароль" type="password" value="" name="password" id="password" />
                    <input type="submit" value="ВОЙТИ" />
                    <div class="clear"></div>
                    <div class="some">
                        <label class="chek" for="rememberMe">Запомнить меня</label>
                        <input type="checkbox" value="1" name="rememberMe" id="rememberMe" />
                        <a href="#">Забыли пароль</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</header><!-- .header-->

<div class="line"></div>


