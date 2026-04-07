<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use yii\behaviors\TimestampBehavior;

/**
 * Модель User для работы с БД
 *
 * @property int $id
 * @property string $username
 * @property string $password_hash
 * @property string $auth_key
 */
class User extends ActiveRecord implements IdentityInterface
{
    public static function tableName()
    {
        return 'user';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::class,
        ];
    }

    public function rules()
    {
        return [
            [['username', 'password_hash'], 'required'],
            [['username'], 'unique'],
            [['username'], 'string', 'max' => 255],
        ];
    }

    // --- Реализация IdentityInterface ---

    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        return $this->auth_key;
    }

    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    // --- Дополнительная логика ---

    /**
     * Поиск пользователя по имени
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }

    /**
     * Проверка пароля (сравнение хеша)
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

    /**
     * Генерация хеша пароля и auth_key перед сохранением
     */
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }
}
