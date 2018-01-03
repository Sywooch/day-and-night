<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "query".
 *
 * @property string $id
 * @property string $id_author Составитель
 * @property string $work_date Выберите дату
 * @property string $start_time Время начала работы
 * @property string $en_time Время сдачи работы
 * @property int $count_symbols Количество символов
 * @property string $status Статус
 * @property string $date_query Дата создание
 *
 * @property User $author
 */
class Query extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'query';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_author', 'count_symbols', 'status'], 'integer'],
            [['work_date', 'start_time', 'en_time', 'date_query'], 'safe'],
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
            'id_author' => 'Составитель',
            'work_date' => 'Выберите дату',
            'start_time' => 'Время начала работы',
            'en_time' => 'Время сдачи работы',
            'count_symbols' => 'Количество символов',
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
