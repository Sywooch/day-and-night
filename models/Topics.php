<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "topics".
 *
 * @property string $id
 * @property string $name_topic название темы
 * @property string $status активность
 *
 * @property Articles[] $articles
 * @property TopicsUse[] $topicsUses
 */
class Topics extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'topics';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_topic'], 'required'],
            [['status'], 'integer'],
            [['name_topic'], 'string', 'max' => 40],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_topic' => 'Name Topic',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticles()
    {
        return $this->hasMany(Articles::className(), ['id_topic' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTopicsUses()
    {
        return $this->hasMany(TopicsUse::className(), ['id_topic' => 'id']);
    }
}
