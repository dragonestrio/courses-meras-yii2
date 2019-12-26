<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DataKas */

$this->title = $model->id_kas;
$this->params['breadcrumbs'][] = ['label' => 'Data Kas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="data-kas-view">

    <p>
        <?= Html::a('Update', ['update', 'id_kas' => $model->id_kas, 'nim' => $model->nim], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_kas' => $model->id_kas, 'nim' => $model->nim], [
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
            'id_kas',
            'nim',
            'nim0.nama',
            'nim0.alamat',
            'nim0.jurusan',
            'nim0.semester',
            'setor',
            'tgl_setor',
        ],
    ]) ?>

</div>
