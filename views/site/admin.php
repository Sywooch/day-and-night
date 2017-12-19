<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 07.12.2017
 * Time: 13:41
 */
//users

?>

<div class="row">

    <div class="col-sm-3 col-md-3">

        <div class="well well-lg">Меню</div>

            <div class="list-group">
                <a href="#" class="list-group-item active">
                    <h3 style="color: white;">Создать пользователя</h3>
                </a>
                <a href="#" class="list-group-item"><h3>...</h3></a>
                <a href="#" class="list-group-item"><h3>...</h3></a>
                <a href="#" class="list-group-item"><h3>...</h3></a>
                <a href="#" class="list-group-item"><h3>...</h3></a>
            </div>

    </div>

    <div class="col-sm-8 col-md-8">




<div class="row">

    <?php for($i = 0; $i < 5; $i++): ?>

        <?php

            //d($users[$i]);

        ?>

        <div class="col-sm-1 col-md-1"></div>

        <div class="col-sm-3 col-md-1">
            <div class="thumbnail">
                <img data-src="holder.js/300x200" alt="...">
                <div class="caption">
                    <h3><?= $users[$i] ? $users[$i]['username'] : 'Создать нового сотрудника!' ?></h3>
                    <p>...</p>
                    <p><a href="#" class="btn btn-primary" role="button">Кнопка</a> <a href="#" class="btn btn-default" role="button">Кнопка</a></p>
                </div>
            </div>
        </div>

    <?php endfor; ?>
    
</div>

<br /><br /><br /><br /><br />
<br /><br /><br /><br /><br />
<br /><br /><br /><br /><br />

<div class="row">

    <div class="col-sm-3 col-md-3"></div>

    <div class="col-sm-6 col-md-5">
        <div class="thumbnail">
            <img data-src="holder.js/300x200" alt="...">
            <div class="caption">
                <h3>Ярлык эскиза</h3>
                <p>...</p>
                <p><a href="#" class="btn btn-primary" role="button">Кнопка</a> <a href="#" class="btn btn-default" role="button">Кнопка</a></p>
            </div>
        </div>
    </div>

    <div class="col-sm-3 col-md-3"></div>

</div>


<div class="bs-example bs-example-tabs">
    <ul id="myTabf" class="nav nav-tabs">
        <li class="active"><a href="#home" data-toggle="tab">Главная</a></li>
        <li class=""><a href="#profile" data-toggle="tab">Профиль</a></li>
        <li class="dropdown">
            <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown">Выпадающее меню <b class="caret"></b></a>
            <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
                <li><a href="#dropdown1" tabindex="-1" data-toggle="tab">@fat</a></li>
                <li><a href="#dropdown2" tabindex="-1" data-toggle="tab">@mdo</a></li>
            </ul>
        </li>
    </ul>
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade active in" id="home">
            <p>Здесь произвольный текст. Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate qui nisi.</p>
        </div>
        <div class="tab-pane fade" id="profile">
            <p>Здесь произвольный текст. Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
        </div>
        <div class="tab-pane fade" id="dropdown1">
            <p>Здесь произвольный текст. Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
        </div>
        <div class="tab-pane fade" id="dropdown2">
            <p>Здесь произвольный текст. Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
        </div>
    </div>
</div>


<ul class="nav nav-pills">
    ...
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            Dropdown <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
            ...
        </ul>
    </li>
    ...
</ul>


    </div>
</div>
