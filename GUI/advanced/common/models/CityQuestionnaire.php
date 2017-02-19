<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "city_questionnaire".
 *
 * @property integer $id
 * @property string $question
 * @property integer $city_information_id
 *
 * @property CityInformation $cityInformation
 */
class CityQuestionnaire extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'city_questionnaire';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['question', 'city_information_id'], 'required'],
            [['city_information_id'], 'integer'],
            [['question'], 'string', 'max' => 100],
            [['city_information_id'], 'exist', 'skipOnError' => true, 'targetClass' => CityInformation::className(), 'targetAttribute' => ['city_information_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'question' => 'Question',
            'city_information_id' => 'City Information ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCityInformation()
    {
        return $this->hasOne(CityInformation::className(), ['id' => 'city_information_id']);
    }
}
