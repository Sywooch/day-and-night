<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "query_work".
 *
 * @property string $id
 * @property string $id_author Исполнитель
 * @property string $text Описание
 * @property string $start_time Время начала работы
 * @property string $end_time Время сдачи работы
 * @property string $status Статус
 * @property string $date_query Дата создание
 *
 * @property User $author
 */
class QueryWork extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'query_work';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_author', 'status'], 'integer'],
            [['text'], 'required'],
            [['text'], 'string'],
            [['start_time', 'end_time', 'date_query'], 'safe'],
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
            'id_author' => 'Исполнитель',
            'text' => 'Описание',
            'start_time' => 'Время начала работы',
            'end_time' => 'Время сдачи работы',
            'status' => 'Статус',
            'date_query' => 'Дата создание',
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
