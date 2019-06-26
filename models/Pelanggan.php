<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pelanggan".
 *
 * @property string $id_user
 * @property int $no_pdam
 * @property string $kode_gol
 * @property string $nama
 * @property int $alamat
 * @property int $desa
 * @property int $kecamatan
 */
class Pelanggan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pelanggan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'no_pdam', 'kode_gol', 'nama', 'alamat', 'desa', 'kecamatan'], 'required'],
            [['no_pdam', 'alamat', 'desa', 'kecamatan'], 'integer'],
            [['id_user'], 'string', 'max' => 16],
            [['kode_gol'], 'string', 'max' => 4],
            [['nama'], 'string', 'max' => 32],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_user' => 'Id User',
            'no_pdam' => 'No Pdam',
            'kode_gol' => 'Kode Gol',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'desa' => 'Desa',
            'kecamatan' => 'Kecamatan',
        ];
    }
}
