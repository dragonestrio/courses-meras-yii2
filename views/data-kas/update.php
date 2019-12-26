<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataKas */

$this->title = 'Update Data Kas: ' . $model->id_kas;
$this->params['breadcrumbs'][] = ['label' => 'Data Kas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kas, 'url' => ['view', 'id_kas' => $model->id_kas, 'nim' => $model->nim]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-kas-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
