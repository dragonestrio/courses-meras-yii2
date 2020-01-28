<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DataInventaris */
?>
<div class="data-inventaris-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_invent',
            'nama_brg',
            'harga',
            'keterangan:ntext',
            'timestamp',
        ],
    ]) ?>

</div>
