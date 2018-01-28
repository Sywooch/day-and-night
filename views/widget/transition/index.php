<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 18.09.2017
 * Time: 13:51
 *
 * @var $pageNow
 * @var $button1 array
 * @var $button2 array
 * @var $button3 array
 * @var $button4 array
 */

use yii\helpers\Html;

?>


<div class="content-com">
    <div class="col-xs-12">

        <div class="col-xs-6"></div>
        <div class="col-xs-3">
            <?php if($button1): ?>
                <div class="news">
                    <?= Html::a($button1[0], $button1[1], [
                        'class' => 'btn btn-info btn-xs active btn-block',
                        'role' => 'button',
                    ])?>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-xs-3">
            <?php if($button2): ?>
                <div class="edit">
                    <?= Html::a($button2[0], $button2[1], [
                        'class' => 'btn btn-info btn-xs active btn-block',
                        'role' => 'button',
                    ])?>
                </div>
            <?php endif; ?>
        </div>

        <div class="col-xs-3">
            <div class="open-now">
                <?= Html::a('Открыто " ' . $pageNow . ' "', '#', [
                    'class' => 'btn btn-default btn-xs btn-block',
                    'role' => 'button',
                ])?>
            </div>
        </div>
        <div class="col-xs-3"></div>
        <div class="col-xs-3">
            <?php if($button3): ?>
                <div class="work-now">
                    <?= Html::a($button3[0], $button3[1], [
                        'class' => 'btn btn-info btn-xs active btn-block',
                        'role' => 'button',
                    ])?>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-xs-3">
            <?php if($button4): ?>
                <div class="article-new">
                    <?= Html::a($button4[0], $button4[1], [
                        'class' => 'btn btn-info btn-xs active btn-block',
                        'role' => 'button',
                    ])?>
                </div>
            <?php endif; ?>
        </div>
    </div>

</div><!-- .content-com -->