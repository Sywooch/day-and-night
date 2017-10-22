<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 18.09.2017
 * Time: 12:28
 */

namespace app\components;

use Yii;
use yii\base\Widget;

class StatisticsWidget extends Widget
{
    public function init()
    {

    }

    public function run()
    {
        return $this->render('index');
    }

    public function getViewPath()
    {
        return parent::getViewPath() . "\\..\\..\\views\\widget\\statistics";
    }
}