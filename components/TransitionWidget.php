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

class TransitionWidget extends Widget
{

    public $pageName;

    public $button1 = null;
    public $button2 = null;
    public $button3 = null;
    public $button4 = null;

    public function init()
    {

    }

    public function run()
    {
        return $this->render('index', [
            'pageNow' => $this->pageName,
            'button1' => $this->button1,
            'button2' => $this->button2,
            'button3' => $this->button3,
            'button4' => $this->button4,
        ]);
    }

    public function getViewPath()
    {
        return parent::getViewPath() . "\\..\\..\\views\\widget\\transition";
    }
}