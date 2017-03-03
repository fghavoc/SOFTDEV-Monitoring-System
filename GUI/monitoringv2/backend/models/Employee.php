<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property integer $id
 * @property string $lastname
 * @property string $firstname
 * @property string $middlename
 * @property string $gender
 * @property integer $age
 * @property integer $contact_Number
 * @property string $email_address
 * @property integer $account_id
 *
 * @property ClassList[] $classLists
 * @property Account $account
 * @property Enrollment[] $enrollments
 * @property Reservation[] $reservations
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lastname', 'firstname', 'gender', 'age', 'contact_Number', 'email_address', 'account_id'], 'required'],
            [['age', 'contact_Number', 'account_id'], 'integer'],
            [['lastname', 'firstname', 'middlename', 'email_address'], 'string', 'max' => 30],
            [['gender'], 'string', 'max' => 10],
            [['email_address'], 'unique'],
            [['contact_Number'], 'unique'],
            [['account_id'], 'unique'],
            [['account_id'], 'exist', 'skipOnError' => true, 'targetClass' => Account::className(), 'targetAttribute' => ['account_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lastname' => 'Lastname',
            'firstname' => 'Firstname',
            'middlename' => 'Middlename',
            'gender' => 'Gender',
            'age' => 'Age',
            'contact_Number' => 'Contact  Number',
            'email_address' => 'Email Address',
            'account_id' => 'Account ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClassLists()
    {
        return $this->hasMany(ClassList::className(), ['employee_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccount()
    {
        return $this->hasOne(Account::className(), ['id' => 'account_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEnrollments()
    {
        return $this->hasMany(Enrollment::className(), ['employee_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReservations()
    {
        return $this->hasMany(Reservation::className(), ['employee_id' => 'id']);
    }
}
