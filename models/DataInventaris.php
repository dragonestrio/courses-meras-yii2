<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "inventaris".
 *
 * @property string $id_invent
 * @property string|null $nama_brg
 * @property float|null $harga
 * @property string|null $keterangan
 * @property string|null $timestamp
 */
class DataInventaris extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inventaris';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_invent'], 'required'],
            [['harga'], 'number'],
            [['keterangan'], 'string'],
            [['id_invent', 'timestamp'], 'string', 'max' => 50],
            [['nama_brg'], 'string', 'max' => 255],
            [['id_invent'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_invent' => 'Id Invent',
            'nama_brg' => 'Nama Brg',
            'harga' => 'Harga',
            'keterangan' => 'Keterangan',
            'timestamp' => 'Timestamp',
        ];
    }
}
