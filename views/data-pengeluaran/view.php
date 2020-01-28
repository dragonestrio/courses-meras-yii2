<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DataPengeluaran */

$this->title = $model->id_pengeluaran;
$this->params['breadcrumbs'][] = ['label' => 'Data Pengeluarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="data-pengeluaran-view">

    <p>
        <?= Html::a('Update', ['update', 'id_pengeluaran' => $model->id_pengeluaran, 'nim' => $model->nim], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_pengeluaran' => $model->id_pengeluaran, 'nim' => $model->nim], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_pengeluaran',
            'nim',
            'jumlah',
            'keterangan:ntext',
            'timestamp',
        ],
    ]) ?>

</div>
