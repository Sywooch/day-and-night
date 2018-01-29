<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 23.01.2018
 * Time: 18:15
 */

namespace app\modules\rbacManager\models;

use yii\base\Model;

class RoleForm extends Model
{
    /** @var string */
    public $name;

    /** @var string */
    public $description;

    /** @var string */
    public $parent_name;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['name', 'description'], 'required'],
            [['name', 'parent_name'], 'string', 'max' => 50],
            ['name', 'unique'],
            ['parent_name', 'exist'],
            [['description'], 'string', 'max' => 255],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Имя*',
            'parent_name' => 'E-mail*',
            'description' => 'Skype*',
        ];
    }
}