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
 * @property integer $lgu_id
 * @property integer $lgu_advisory_id
 * @property integer $suggested_supplies_id
 *
 * @property Lgu $lgu
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
            [['lgu_id', 'lgu_advisory_id', 'suggested_supplies_id'], 'required'],
            [['lgu_id', 'lgu_advisory_id', 'suggested_supplies_id'], 'integer'],
            [['requested_supplies', 'quantity', 'destination'], 'string', 'max' => 45],
            [['lgu_id', 'lgu_advisory_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lgu::className(), 'targetAttribute' => ['lgu_id' => 'id', 'lgu_advisory_id' => 'advisory_id']],
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
            'lgu_id' => 'Lgu ID',
            'lgu_advisory_id' => 'Lgu Advisory ID',
            'suggested_supplies_id' => 'Suggested Supplies ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLgu()
    {
        return $this->hasOne(Lgu::className(), ['id' => 'lgu_id', 'advisory_id' => 'lgu_advisory_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSuggestedSupplies()
    {
        return $this->hasOne(SuggestedSupplies::className(), ['id' => 'suggested_supplies_id']);
    }
}
