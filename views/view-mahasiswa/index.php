<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ViewMahasiswaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Mahasiswa';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="view-mahasiswa-index">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nim',
            'nama',
            'alamat',
            'jurusan',
            'semester',
            'jenis_kel',
            'agama',
            'kelas',

        ],
    ]); ?>


</div>
