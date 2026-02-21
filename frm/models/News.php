<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\db\ActiveQuery;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $image
 * @property string $date
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $updated_at
 *
 * @property NewsTranslation[] $newsTranslations
 */
class News extends ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'default', 'value' => null],
            [['status'], 'default', 'value' => 1],
            [['image', 'date'], 'required'],
            [['date'], 'date', 'format' => 'php:d-m-Y'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Image',
            'date' => 'Date',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[NewsTranslations]].
     *
     * @return ActiveQuery
     */
    public function getNewsTranslations()
    {
        return $this->hasMany(NewsTranslation::class, ['news_id' => 'id']);
    }

    public function getTranslations()
    {
        return $this->hasMany(NewsTranslation::class, ['news_id' => 'id']);
    }

    public function getTranslation($language = null)
    {
        $language = $language ?? Yii::$app->language;

        return $this->hasOne(NewsTranslation::class, ['news_id' => 'id'])
            ->andWhere(['language' => $language]);
    }

    public static function findActive()
    {
        return static::find()->where(['status' => 1]);
    }

}
