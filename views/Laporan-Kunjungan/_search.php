<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LaporanKunjunganSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="laporan-kunjungan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_user') ?>

    <?= $form->field($model, 'kategori_akw') ?>

    <?= $form->field($model, 'negara') ?>

    <?= $form->field($model, 'provinsi') ?>

    <?php // echo $form->field($model, 'pria') ?>

    <?php // echo $form->field($model, 'wanita') ?>

    <?php // echo $form->field($model, 'jumlah') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
