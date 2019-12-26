<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About Creator this Web';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-aboutcreator">
<center>
	<h1>Our Team</h1>
	<br>
    <table border="1" width="50%" style="text-align: center;">
    	<tr>
            <td>
                <center>
                    <?php echo Html::img('@web/source/Qiswatul.U.jpg', ['height'=>'230px', 'width'=>'180px']) ?>
                    <h3 style="margin-top: 47px;">Qiswatul Ulfah</h3>
                    <h4>G.231.17.0032</h4>
                </center>
            </td>
            <td>
                <center>
                    <?php echo Html::img('@web/source/Satrio.N.W.jpg', ['height'=>'230px', 'width'=>'180px']) ?>
                    <h3>Satrio Nugroho Wicaksono</h3>
                    <h4>G.211.19.0016</h4>
                </center>
            </td>
            <td>
                <center>
                    <?php echo Html::img('@web/source/Fendy.N.P.jpg', ['height'=>'230px', 'width'=>'180px']) ?>
                    <h3>Fendy Noval Pradipta</h3>
                    <h4>G.211.19.0021</h4>
                </center>
            </td>
        </tr>
    </table>
</center>
</div>
