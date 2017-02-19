<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "lgu".
 *
 * @property integer $id
 * @property string $city
 * @property string $email
 * @property string $password
 * @property string $contact
 * @property integer $advisory_id
 *
 * @property CityInformation[] $cityInformations
 * @property Advisory $advisory
 * @property SuppliesNeeded[] $suppliesNeededs
 */
class Lgu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lgu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['city', 'email', 'password', 'contact', 'advisory_id'], 'required'],
            [['advisory_id'], 'integer'],
            [['city', 'email', 'password', 'contact'], 'string', 'max' => 45],
            [['advisory_id'], 'exist', 'skipOnError' => true, 'targetClass' => Advisory::className(), 'targetAttribute' => ['advisory_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'city' => 'City',
            'email' => 'Email',
            'password' => 'Password',
            'contact' => 'Contact',
            'advisory_id' => 'Advisory ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCityInformations()
    {
        return $this->hasMany(CityInformation::className(), ['lgu_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdvisory()
    {
        return $this->hasOne(Advisory::className(), ['id' => 'advisory_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSuppliesNeededs()
    {
        return $this->hasMany(SuppliesNeeded::className(), ['lgu_id' => 'id', 'lgu_advisory_id' => 'advisory_id']);
    }
}
