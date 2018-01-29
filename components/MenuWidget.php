<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 18.09.2017
 * Time: 13:52
 */

namespace app\components;

use Yii;
use yii\base\Widget;

class MenuWidget extends Widget
{
    public function run()
    {
        return $this->render('index');
    }

    public function getViewPath()
    {
        return parent::getViewPath() . "\\..\\..\\views\\widget\\menu";
    }
}