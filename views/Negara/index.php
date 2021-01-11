<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NegaraSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Negaras';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="negara-index">

    <h1><?= Html::encode($this->title) ?></h1>

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
