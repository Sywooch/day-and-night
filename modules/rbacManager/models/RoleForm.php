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
    public $rule_name;

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
            [['name', 'rule_name', 'parent_name'], 'string', 'max' => 50],
            [['name'], 'unique', 'targetClass' => AuthRule::className(), 'targetAttribute' => ['name' => 'name']],
            [['description'], 'string', 'max' => 255],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Имф правила',
            'rule_name' => 'Название правила',
            'parent_name' => 'Прекрепить к роле',
            'description' => 'Описание',
        ];
    }
}