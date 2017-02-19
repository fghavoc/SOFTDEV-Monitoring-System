<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "suggested_supplies".
 *
 * @property integer $id
 * @property string $disaster_type
 * @property string $equipment_name
 *
 * @property SuppliesNeeded[] $suppliesNeededs
 */
class SuggestedSupplies extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'suggested_supplies';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['disaster_type', 'equipment_name'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'disaster_type' => 'Disaster Type',
            'equipment_name' => 'Equipment Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSuppliesNeededs()
    {
        return $this->hasMany(SuppliesNeeded::className(), ['suggested_supplies_id' => 'id']);
    }
}
