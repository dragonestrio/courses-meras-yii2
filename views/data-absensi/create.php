<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataAbsensi */

$this->title = 'Create Data Absensi';
$this->params['breadcrumbs'][] = ['label' => 'Data Absensis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-absensi-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
