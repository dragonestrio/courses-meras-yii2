<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DataMahasiswaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Mahasiswa';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-mahasiswa-index">


    <p>
        <?= Html::a('Create Data Mahasiswa', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Cetak', ['/site/report'], ['class' => 'btn btn-primary','target'=>'_blank']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nim',
            'nama',
            //'alamat',
            'jurusan',
            'semester',
            'jenis_kel',
            'agama',
            'kelas',

            [
                'attribute'=>'nim',
                'label'=>'Opsi',
                'filter'=>'',
                'format'=>'raw',
                'value' => function($model){
                    return '<div class="btn-group">
                        '.Html::a('<i class="fa fa-fw fa-eye"></i>', ['view', 'id' => $model->nim], ['class' => 'btn btn-info btn-sm']).'
                        '.Html::a('<i class="fa fa-fw fa-file"></i>', ['/site/report2', 'id' => $model->nim], ['class' => 'btn btn-success btn-sm']).'
                        '.Html::a('<i class="fa fa-fw fa-edit"></i>', ['update', 'id' => $model->nim], ['class' => 'btn btn-warning btn-sm']).'
                        '.Html::a('<i class="fa fa-fw fa-trash"></i>', ['delete', 'id' => $model->nim], ['class' => 'btn btn-danger btn-sm']).'
                    </div>';
                },
            ],
        ],
    ]); ?>


</div>
