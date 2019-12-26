<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DataKasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Kas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-kas-index">

    <p>
        <?= Html::a('Create Data Kas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_kas',
            'nim',
            'setor',
            'tgl_setor',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
