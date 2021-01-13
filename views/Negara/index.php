<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NegaraSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Negara';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="negara-index">
<h3 class="box-title"></h3>
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <div class="col-sm-7">
        </div>
    <h1></h1>

    <p>
        <?= Html::a('Create Negara', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'negara',
            'kawasan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
