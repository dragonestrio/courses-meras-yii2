<?php

use yii\helpers\Html;
$model->id_pengeluaran = $kode;
/* @var $this yii\web\View */
/* @var $model app\models\DataPengeluaran */

$this->title = 'Create Data Dana Keluar';
$this->params['breadcrumbs'][] = ['label' => 'Data Pengeluarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-pengeluaran-create">

    <?= $this->render('_form', [
        'model' => $model,
        'kode' => $kode
    ]) ?>

</div>
