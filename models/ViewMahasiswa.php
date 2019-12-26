<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa".
 *
 * @property string $nim
 * @property string $nama
 * @property string $alamat
 * @property string $jurusan
 * @property int|null $semester
 * @property string $jenis_kel
 * @property string $agama
 * @property string $kelas
 */
class ViewMahasiswa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'nama', 'alamat', 'jurusan', 'jenis_kel', 'agama', 'kelas'], 'required'],
            [['semester'], 'integer'],
            [['nim', 'nama', 'alamat', 'jurusan', 'jenis_kel', 'agama', 'kelas'], 'string', 'max' => 50],
            [['nim'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nim' => 'Nim',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'jurusan' => 'Jurusan',
            'semester' => 'Semester',
            'jenis_kel' => 'Jenis Kel',
            'agama' => 'Agama',
            'kelas' => 'Kelas',
        ];
    }
}
