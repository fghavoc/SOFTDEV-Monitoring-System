<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "lgu_user".
 *
 * @property integer $id
 * @property string $email
 * @property string $username
 * @property string $password
 * @property string $contact
 * @property string $government_level
 * @property integer $Advisory_id
 * @property string $Advisory_NDRMMC Admin_id
 *
 * @property LguInformation[] $lguInformations
 * @property Advisory $advisory
 * @property SuppliesNeeded[] $suppliesNeededs
 */
class LguUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lgu_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'Advisory_id', 'Advisory_NDRMMC Admin_id'], 'required'],
            [['id', 'Advisory_id', 'Advisory_NDRMMC Admin_id'], 'integer'],
            [['email', 'username', 'password', 'contact', 'government_level'], 'string', 'max' => 45],
            [['Advisory_id', 'Advisory_NDRMMC Admin_id'], 'exist', 'skipOnError' => true, 'targetClass' => Advisory::className(), 'targetAttribute' => ['Advisory_id' => 'id', 'Advisory_NDRMMC Admin_id' => 'NDRMMC Admin_id']],
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
            'government_level' => 'Government Level',
            'Advisory_id' => 'Advisory ID',
            'Advisory_NDRMMC Admin_id' => 'Advisory  Ndrmmc  Admin ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLguInformations()
    {
        return $this->hasMany(LguInformation::className(), ['LGU User_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdvisory()
    {
        return $this->hasOne(Advisory::className(), ['id' => 'Advisory_id', 'NDRMMC Admin_id' => 'Advisory_NDRMMC Admin_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSuppliesNeededs()
    {
        return $this->hasMany(SuppliesNeeded::className(), ['LGU User_id' => 'id']);
    }
}
