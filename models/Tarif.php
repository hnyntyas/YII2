<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tarif".
 *
 * @property string $golongan
 * @property string $kode_golongan
 * @property int $daya
 * @property int $biaya_beban
 * @property int $biaya_pemakaian
 */
class Tarif extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tarif';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['golongan', 'kode_golongan', 'daya', 'biaya_beban', 'biaya_pemakaian'], 'required'],
            [['daya', 'biaya_beban', 'biaya_pemakaian'], 'integer'],
            [['golongan'], 'string', 'max' => 20],
            [['kode_golongan'], 'string', 'max' => 5],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'golongan' => 'Golongan',
            'kode_golongan' => 'Kode Golongan',
            'daya' => 'Daya',
            'biaya_beban' => 'Biaya Beban',
            'biaya_pemakaian' => 'Biaya Pemakaian',
        ];
    }
	
	
}
