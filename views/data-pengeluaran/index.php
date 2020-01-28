<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DataPengeluaranSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dana Keluar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-pengeluaran-index">

    <p>
        <?= Html::a('Create Data Dana Keluar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pengeluaran',
            'nim',
            'jumlah',
            'keterangan:ntext',
            'timestamp',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
