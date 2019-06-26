<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tagihan_m".
 *
 * @property int $id_tagihan
 * @property int $id_operator
 * @property string $tgl_gen
 * @property string $thnbln_per
 *
 * @property Tagihan $tagihan
 */
class TagihanM extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tagihan_m';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_tagihan', 'id_operator', 'tgl_gen', 'thnbln_per'], 'required'],
            [['id_tagihan', 'id_operator'], 'integer'],
            [['tgl_gen', 'thnbln_per'], 'safe'],
            [['id_tagihan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_tagihan' => 'Id Tagihan',
            'id_operator' => 'Id Operator',
            'tgl_gen' => 'Tgl Gen',
            'thnbln_per' => 'Thnbln Per',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTagihan()
    {
        return $this->hasOne(Tagihan::className(), ['id_tagihan' => 'id_tagihan']);
    }
}
