<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pengeluaran".
 *
 * @property string $id_pengeluaran
 * @property string $nim
 * @property float|null $jumlah
 * @property string|null $keterangan
 * @property string|null $timestamp
 */
class DataPengeluaran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengeluaran';
    }

    /**
     * {@inheritdoc}
     */
    public static function getQuery($querysql)
    {
        $connection = Yii::$app->getDB();
        $query = $connection->createCommand($querysql);
        return $query->queryAll();
    }

        /**
     * {@inheritdoc}
     */

    public function rules()
    {
        return [
            [['id_pengeluaran', 'nim'], 'required'],
            [['jumlah'], 'number'],
            [['keterangan'], 'string'],
            [['id_pengeluaran', 'timestamp'], 'string', 'max' => 255],
            [['nim'], 'string', 'max' => 50],
            [['id_pengeluaran', 'nim'], 'unique', 'targetAttribute' => ['id_pengeluaran', 'nim']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pengeluaran' => 'Id Pengeluaran',
            'nim' => 'Nim',
            'jumlah' => 'Jumlah',
            'keterangan' => 'Keterangan',
            'timestamp' => 'Timestamp',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getPengeluaran()
    {
        $a = "PENG";
        $b = date("m");
        $c = date("y");
        $d = $b. $c;

        $data = DataPengeluaran::getQuery('select id_pengeluaran from pengeluaran order by id_pengeluaran desc');
        if (empty($data)) {
            $kosong = $a .$d ."00001";
            return $kosong;
        }else{
            $kdKlr = $data[0]['id_pengeluaran'];
            $kdKlr++;
            $noUrut = (int) substr($kdKlr,7, 13);

            $kodeBarang = $a . $d. sprintf("%05s", $noUrut);

            return $kodeBarang;
        }
    }
}
