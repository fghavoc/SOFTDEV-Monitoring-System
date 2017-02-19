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
 * @property integer $lgu_id
 *
 * @property Lgu $lgu
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
            [['region_name', 'city_name', 'no_of_brgy', 'lgu_id'], 'required'],
            [['lgu_id'], 'integer'],
            [['region_name', 'city_name', 'no_of_brgy'], 'string', 'max' => 45],
            [['lgu_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lgu::className(), 'targetAttribute' => ['lgu_id' => 'id']],
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
            'lgu_id' => 'Lgu ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLgu()
    {
        return $this->hasOne(Lgu::className(), ['id' => 'lgu_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCityQuestionnaires()
    {
        return $this->hasMany(CityQuestionnaire::className(), ['city_information_id' => 'id']);
    }
}
