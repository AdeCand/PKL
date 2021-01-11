<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KategoriAkw */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kategori-akw-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kategori_akw')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
