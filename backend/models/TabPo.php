<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tab_po".
 *
 * @property integer $id
 * @property string $PO_No
 * @property string $PO_Date
 * @property string $PO_Time
 * @property integer $PO_Status
 * @property double $PO_Subtotal
 * @property integer $PO_Qty
 * @property double $PO_Grandtotal
 * @property string $User_Create
 * @property string $User_Approve
 * @property string $UPDT
 */
class TabPo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tab_po';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PO_Date', 'PO_Time', 'UPDT'], 'safe'],
            [['PO_Status', 'PO_Qty'], 'integer'],
            [['PO_Subtotal', 'PO_Grandtotal'], 'number'],
            [['PO_No'], 'string', 'max' => 20],
            [['User_Create', 'User_Approve'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'PO_No' => 'Po  No',
            'PO_Date' => 'Po  Date',
            'PO_Time' => 'Po  Time',
            'PO_Status' => 'Po  Status',
            'PO_Subtotal' => 'Po  Subtotal',
            'PO_Qty' => 'Po  Qty',
            'PO_Grandtotal' => 'Po  Grandtotal',
            'User_Create' => 'User  Create',
            'User_Approve' => 'User  Approve',
            'UPDT' => 'Updt',
        ];
    }
}
