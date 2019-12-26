<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataAbsensi */

$this->title = 'Update Data Absensi: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Data Absensis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-absensi-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
