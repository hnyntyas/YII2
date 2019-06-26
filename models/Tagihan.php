<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tagihan".
 *
 * @property int $id_tagihan
 * @property int $no_pdam
 * @property string $id_user
 * @property int $jmlbln_lalu
 * @property int $jmlbln_ini
 * @property int $harga_satuan
 * @property string $tgl_bayar
 * @property string $status_bayar
 * @property int $jumlah_bayar
 *
 * @property Pemakaian $pemakaian
 * @property Pemakaian $pemakaian0
 * @property TagihanM $tagihan
 */
class Tagihan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tagihan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_tagihan', 'no_pdam', 'id_user', 'jmlbln_lalu', 'jmlbln_ini', 'harga_satuan', 'tgl_bayar', 'status_bayar', 'jumlah_bayar'], 'required'],
            [['id_tagihan', 'no_pdam', 'jmlbln_lalu', 'jmlbln_ini', 'harga_satuan', 'jumlah_bayar'], 'integer'],
            [['tgl_bayar'], 'safe'],
            [['id_user', 'status_bayar'], 'string', 'max' => 16],
            [['no_pdam'], 'unique'],
            [['id_user'], 'unique'],
            [['id_tagihan'], 'unique'],
            [['id_tagihan'], 'exist', 'skipOnError' => true, 'targetClass' => TagihanM::className(), 'targetAttribute' => ['id_tagihan' => 'id_tagihan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_tagihan' => 'Id Tagihan',
            'no_pdam' => 'No Pdam',
            'id_user' => 'Id User',
            'jmlbln_lalu' => 'Jmlbln Lalu',
            'jmlbln_ini' => 'Jmlbln Ini',
            'harga_satuan' => 'Harga Satuan',
            'tgl_bayar' => 'Tgl Bayar',
            'status_bayar' => 'Status Bayar',
            'jumlah_bayar' => 'Jumlah Bayar',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPemakaian()
    {
        return $this->hasOne(Pemakaian::className(), ['id_tagihan' => 'id_tagihan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPemakaian0()
    {
        return $this->hasOne(Pemakaian::className(), ['no_pdam' => 'no_pdam']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTagihan()
    {
        return $this->hasOne(TagihanM::className(), ['id_tagihan' => 'id_tagihan']);
    }
}
