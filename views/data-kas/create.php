<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataKas */

$this->title = 'Create Data Kas';
$this->params['breadcrumbs'][] = ['label' => 'Data Kas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-kas-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
