<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LaporanKunjunganSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Laporan Kunjungan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="laporan-kunjungan-index">
<br>
<h3 class="box-title"></h3>
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <div class="col-sm-7">
        </div>
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Laporan Kunjungan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_user',
            'kategori_akw',
            'negara',
            'provinsi',
            //'pria',
            //'wanita',
            //'jumlah',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
