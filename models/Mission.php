<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mission".
 *
 * @property string $id
 * @property string $id_topic Тема
 * @property string $id_author Составитель
 * @property string $article_name Название статьи
 * @property string $uniqueness Уникальность
 * @property string $develop_theme Раскрыть тему
 * @property string $empty_words Запрещены фразы
 * @property string $keywords Ключевые слова
 * @property string $comment_view Дополнительное описание
 * @property string $status Статус
 * @property string $date_creature Дата создание
 *
 * @property Topics $topic
 * @property User $author
 */
class Mission extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mission';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_topic', 'id_author', 'develop_theme', 'empty_words', 'keywords', 'comment_view'], 'required'],
            [['id_topic', 'id_author', 'status'], 'integer'],
            [['develop_theme', 'empty_words', 'keywords'], 'string'],
            [['comment_view', 'date_creature'], 'safe'],
            [['article_name', 'uniqueness'], 'string', 'max' => 40],
            [['id_topic'], 'exist', 'skipOnError' => true, 'targetClass' => Topics::className(), 'targetAttribute' => ['id_topic' => 'id']],
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
            'id_topic' => 'Тема',
            'id_author' => 'Составитель',
            'article_name' => 'Название статьи',
            'uniqueness' => 'Уникальность',
            'develop_theme' => 'Раскрыть тему',
            'empty_words' => 'Запрещены фразы',
            'keywords' => 'Ключевые слова',
            'comment_view' => 'Дополнительное описание',
            'status' => 'Статус',
            'date_creature' => 'Дата создание',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTopic()
    {
        return $this->hasOne(Topics::className(), ['id' => 'id_topic']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(User::className(), ['id' => 'id_author']);
    }
}
