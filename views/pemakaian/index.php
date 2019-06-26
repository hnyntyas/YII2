<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PemakaianSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pemakaians';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemakaian-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pemakaian', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_pdam',
            'id_tagihan',
            'pemakaian_per_m3',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
