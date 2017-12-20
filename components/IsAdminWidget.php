<?php

namespace app\components;

use yii\base\Widget;
use yii\bootstrap\Html;

class IsAdminWidget extends Widget
{
    /** @var string  */
    public $name = 'ред./new';

    /** @var string  */
    public $class = 'a_edit';

    /** @var string  */
    public $url = '#';

    public function run()
    {
        return \Yii::$app->user->can('admin') ? Html::a($this->name, $this->url, [
            'class' => $this->class,
        ]) : null;
    }
}