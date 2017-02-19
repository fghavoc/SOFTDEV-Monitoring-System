<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ndrrmc".
 *
 * @property integer $id
 * @property string $email
 * @property string $username
 * @property string $password
 * @property string $contact
 *
 * @property Advisory[] $advisories
 */
class Ndrrmc extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ndrrmc';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'email', 'username', 'password', 'contact'], 'required'],
            [['id'], 'integer'],
            [['email', 'username', 'password', 'contact'], 'string', 'max' => 45],
            [['id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'username' => 'Username',
            'password' => 'Password',
            'contact' => 'Contact',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdvisories()
    {
        return $this->hasMany(Advisory::className(), ['ndrrmc_id' => 'id']);
    }
}
