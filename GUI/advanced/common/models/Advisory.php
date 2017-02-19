<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "advisory".
 *
 * @property integer $id
 * @property string $date
 * @property string $subject
 * @property string $disaster_category
 * @property integer $ndrrmc_id
 *
 * @property Ndrrmc $ndrrmc
 */
class Advisory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'advisory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'date', 'subject', 'disaster_category', 'ndrrmc_id'], 'required'],
            [['id', 'ndrrmc_id'], 'integer'],
            [['date', 'subject', 'disaster_category'], 'string', 'max' => 45],
            [['id'], 'unique'],
            [['ndrrmc_id'], 'exist', 'skipOnError' => true, 'targetClass' => Ndrrmc::className(), 'targetAttribute' => ['ndrrmc_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'subject' => 'Subject',
            'disaster_category' => 'Disaster Category',
            'ndrrmc_id' => 'Ndrrmc ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNdrrmc()
    {
        return $this->hasOne(Ndrrmc::className(), ['id' => 'ndrrmc_id']);
    }
}
