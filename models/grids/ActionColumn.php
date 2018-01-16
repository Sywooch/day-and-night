<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12.01.2018
 * Time: 15:12
 */

namespace app\models\grids;

use Yii;
use yii\helpers\Html;

class ActionColumn extends \yii\grid\ActionColumn
{

    /**
     * Initializes the default button rendering callback for single button.
     * @param string $name Button name as it's written in template
     * @param string $iconName The part of Bootstrap glyphicon class that makes it unique
     * @param array $additionalOptions Array of additional options
     * @since 2.0.11
     */
    protected function initDefaultButton($name, $iconName, $additionalOptions = [])
    {
        if (!isset($this->buttons[$name]) && strpos($this->template, '{' . $name . '}') !== false) {
            $this->buttons[$name] = function ($url, $model, $key) use ($name, $iconName, $additionalOptions) {
                switch ($name) {
                    case 'view':
                        $title = Yii::t('yii', 'Открыть');
                        break;
                    case 'update':
                        $title = Yii::t('yii', 'Редактировать');
                        break;
                    case 'delete':
                        $title = Yii::t('yii', 'Удалить');
                        break;
                    default:
                        $title = ucfirst($name);
                }
                $options = array_merge([
                    'title' => $title,
                    'aria-label' => $title,
                    'data-pjax' => '0',
                ], $additionalOptions, $this->buttonOptions);
                $icon = Html::tag('span', '', ['class' => "glyphicon glyphicon-$iconName"]);
                return Html::a($icon, $url, $options);
            };
        }
    }

}
