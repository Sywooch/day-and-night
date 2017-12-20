<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "manual".
 *
 * @property string $id
 * @property string $name
 * @property string $text
 * @property string $date_publication
 */
class Manual extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'manual';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text'], 'required'],
            [['text'], 'string'],
            [['date_publication'], 'safe'],
            [['name'], 'string', 'max' => 40],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'text' => 'Text',
            'date_publication' => 'Date Publication',
        ];
    }
}
