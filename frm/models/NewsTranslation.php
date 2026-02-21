<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "news_translation".
 *
 * @property int $id
 * @property int $news_id
 * @property string $language
 * @property string $title
 * @property string $description
 *
 * @property News $news
 */
class NewsTranslation extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news_translation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['news_id', 'language', 'title', 'description'], 'required'],
            [['news_id'], 'integer'],
            [['description'], 'string'],
            [['language'], 'string', 'max' => 5],
            [['title'], 'string', 'max' => 255],
            [['news_id'], 'exist', 'skipOnError' => true, 'targetClass' => News::class, 'targetAttribute' => ['news_id' => 'id']],
            [['news_id', 'language'], 'unique',
                'targetAttribute' => ['news_id', 'language'],
                'message' => 'Translation for this language already exists.'
            ],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'news_id' => 'News ID',
            'language' => 'Language',
            'title' => 'Title',
            'description' => 'Description',
        ];
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::class,
        ];
    }


    /**
     * Gets query for [[News]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNews()
    {
        return $this->hasOne(News::class, ['id' => 'news_id']);
    }

}
