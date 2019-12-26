<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataMahasiswa */

$this->title = 'Create Data Mahasiswa';
$this->params['breadcrumbs'][] = ['label' => 'Data Mahasiswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-mahasiswa-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
