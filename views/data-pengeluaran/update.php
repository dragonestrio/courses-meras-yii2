<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataPengeluaran */

$this->title = 'Update Data Pengeluaran: ' . $model->id_pengeluaran;
$this->params['breadcrumbs'][] = ['label' => 'Data Pengeluarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pengeluaran, 'url' => ['view', 'id_pengeluaran' => $model->id_pengeluaran, 'nim' => $model->nim]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-pengeluaran-update">

     <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
