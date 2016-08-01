<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "macheaders".
 *
 * @property integer $packetId
 * @property integer $protocolVersion
 * @property integer $type
 * @property integer $subtype
 * @property integer $toDS
 * @property integer $fromDS
 * @property integer $moreFragments
 * @property integer $retry
 * @property integer $powerMgmt
 * @property integer $moreData
 * @property integer $protectedFrame
 * @property integer $ord
 * @property integer $durationId
 * @property string $addr1
 * @property string $addr2
 * @property string $addr3
 * @property integer $fragmentNumber
 * @property integer $seqNumber
 * @property string $addr4
 * @property integer $QoSControl
 * @property integer $HTControl
 */
class Macheaders extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'macheaders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['packetId'], 'required'],
            [['packetId', 'protocolVersion', 'type', 'subtype', 'toDS', 'fromDS', 'moreFragments', 'retry', 'powerMgmt', 'moreData', 'protectedFrame', 'ord', 'durationId', 'fragmentNumber', 'seqNumber', 'QoSControl', 'HTControl'], 'integer'],
            [['addr1', 'addr2', 'addr3', 'addr4'], 'string', 'max' => 17]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'packetId' => Yii::t('app', 'Packet ID'),
            'protocolVersion' => Yii::t('app', 'Protocol Version'),
            'type' => Yii::t('app', 'Type'),
            'subtype' => Yii::t('app', 'Subtype'),
            'toDS' => Yii::t('app', 'To Ds'),
            'fromDS' => Yii::t('app', 'From Ds'),
            'moreFragments' => Yii::t('app', 'More Fragments'),
            'retry' => Yii::t('app', 'Retry'),
            'powerMgmt' => Yii::t('app', 'Power Mgmt'),
            'moreData' => Yii::t('app', 'More Data'),
            'protectedFrame' => Yii::t('app', 'Protected Frame'),
            'ord' => Yii::t('app', 'Ord'),
            'durationId' => Yii::t('app', 'Duration ID'),
            'addr1' => Yii::t('app', 'Addr1'),
            'addr2' => Yii::t('app', 'Addr2'),
            'addr3' => Yii::t('app', 'Addr3'),
            'fragmentNumber' => Yii::t('app', 'Fragment Number'),
            'seqNumber' => Yii::t('app', 'Seq Number'),
            'addr4' => Yii::t('app', 'Addr4'),
            'QoSControl' => Yii::t('app', 'Qo Scontrol'),
            'HTControl' => Yii::t('app', 'Htcontrol'),
        ];
    }
}
