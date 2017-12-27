<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property string $id
 * @property string $id_author
 * @property string $name заголовок
 * @property string $text
 * @property string $date_publication время публикации
 *
 * @property User $author
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_author', 'text'], 'required'],
            [['id_author'], 'integer'],
            [['text'], 'string'],
            [['date_publication'], 'safe'],
            [['name'], 'string', 'max' => 40],
            [['id_author'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_author' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_author' => 'Автор новости',
            'name' => 'Название новости',
            'text' => 'Текст новости',
            'date_publication' => 'Дата публткации',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(User::className(), ['id' => 'id_author']);
    }
}
