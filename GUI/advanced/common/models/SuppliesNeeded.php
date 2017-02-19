<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "supplies_needed".
 *
 * @property integer $id
 * @property string $requested_supplies
 * @property string $quantity
 * @property string $destination
 * @property integer $suggested_supplies_id
 *
 * @property SuggestedSupplies $suggestedSupplies
 */
class SuppliesNeeded extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'supplies_needed';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'suggested_supplies_id'], 'required'],
            [['id', 'suggested_supplies_id'], 'integer'],
            [['requested_supplies', 'quantity', 'destination'], 'string', 'max' => 45],
            [['id'], 'unique'],
            [['suggested_supplies_id'], 'exist', 'skipOnError' => true, 'targetClass' => SuggestedSupplies::className(), 'targetAttribute' => ['suggested_supplies_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'requested_supplies' => 'Requested Supplies',
            'quantity' => 'Quantity',
            'destination' => 'Destination',
            'suggested_supplies_id' => 'Suggested Supplies ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSuggestedSupplies()
    {
        return $this->hasOne(SuggestedSupplies::className(), ['id' => 'suggested_supplies_id']);
    }
}
