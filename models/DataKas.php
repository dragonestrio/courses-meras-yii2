<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kas".
 *
 * @property int $id_kas
 * @property string $nim
 * @property float|null $setor
 * @property string $tgl_setor
 */
class DataKas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim'], 'required'],
            [['setor'], 'number'],
            [['tgl_setor'], 'safe'],
            [['nim'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kas' => 'Id Kas',
            'nim' => 'Nim',
            'setor' => 'Setor',
            'tgl_setor' => 'Tgl Setor',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getNim0()
    {
        return $this->hasOne(DataMahasiswa::classname(), ['nim' => 'nim']);
    }   
}
