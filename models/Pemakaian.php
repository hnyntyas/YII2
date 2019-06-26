<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pemakaian".
 *
 * @property int $no_pdam
 * @property int $id_tagihan
 * @property int $pemakaian_per_m3
 *
 * @property Pelanggan $pelanggan
 * @property Tarif[] $noPdams
 * @property Tagihan $tagihan
 * @property Tagihan $noPdam
 */
class Pemakaian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pemakaian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_pdam', 'id_tagihan', 'pemakaian_per_m3'], 'required'],
            [['no_pdam', 'id_tagihan', 'pemakaian_per_m3'], 'integer'],
            [['no_pdam'], 'unique'],
            [['id_tagihan'], 'unique'],
            [['id_tagihan'], 'exist', 'skipOnError' => true, 'targetClass' => Tagihan::className(), 'targetAttribute' => ['id_tagihan' => 'id_tagihan']],
            [['no_pdam'], 'exist', 'skipOnError' => true, 'targetClass' => Tagihan::className(), 'targetAttribute' => ['no_pdam' => 'no_pdam']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_pdam' => 'No Pdam',
            'id_tagihan' => 'Id Tagihan',
            'pemakaian_per_m3' => 'Pemakaian Per M3',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPelanggan()
    {
        return $this->hasOne(Pelanggan::className(), ['no_pdam' => 'no_pdam']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNoPdams()
    {
        return $this->hasMany(Tarif::className(), ['no_pdam' => 'no_pdam'])->viaTable('pelanggan', ['no_pdam' => 'no_pdam']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTagihan()
    {
        return $this->hasOne(Tagihan::className(), ['id_tagihan' => 'id_tagihan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNoPdam()
    {
        return $this->hasOne(Tagihan::className(), ['no_pdam' => 'no_pdam']);
    }
}
