<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "packets".
 *
 * @property integer $packetId
 * @property string $source
 * @property string $comment
 * @property integer $mark
 * @property double $timestamp
 * @property integer $length
 */
class Packets extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'packets';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['packetId'], 'required'],
            [['packetId', 'mark', 'length'], 'integer'],
            [['comment'], 'string'],
            [['timestamp'], 'number'],
            [['source'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'packetId' => Yii::t('app', 'Packet ID'),
            'source' => Yii::t('app', 'Source'),
            'comment' => Yii::t('app', 'Comment'),
            'mark' => Yii::t('app', 'Mark'),
            'timestamp' => Yii::t('app', 'Timestamp'),
            'length' => Yii::t('app', 'Length'),
        ];
    }
}
