<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 03.01.2018
 * Time: 17:51
 */

namespace app\models;


use yii\base\Model;

class Status extends Model
{
    const OFF = 0;
    const OK = 1;
    const ZR = 2;

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'off',
            'ok',
            'Заявка на рассмотрении',
        ];
    }

    public function statusStyle()
    {
        return [
            'btn-danger',
            'btn-primary',
            'btn-info',
        ];
    }

    static public function getLabel($id_status)
    {
        $status = new Status();
        $label = $status->attributeLabels()[$id_status];
        $class = $status->statusStyle()[$id_status];

        return "<div class='$class'>$label</div>";
    }
}