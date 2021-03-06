<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "city_information".
 *
 * @property integer $id
 * @property string $region_name
 * @property string $city_name
 * @property string $no_of_brgy
 * @property integer $user_id
 *
 * @property User $user
 * @property CityQuestionnaire[] $cityQuestionnaires
 */
class CityInformation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'city_information';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'region_name', 'city_name', 'no_of_brgy', 'user_id'], 'required'],
            [['id', 'user_id'], 'integer'],
            [['region_name', 'city_name', 'no_of_brgy'], 'string', 'max' => 45],
            [['id'], 'unique'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'region_name' => 'Region Name',
            'city_name' => 'City Name',
            'no_of_brgy' => 'No Of Brgy',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCityQuestionnaires()
    {
        return $this->hasMany(CityQuestionnaire::className(), ['city_information_id' => 'id']);
    }
}
