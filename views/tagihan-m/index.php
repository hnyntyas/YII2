<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TagihanMSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tagihan Ms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tagihan-m-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tagihan M', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_tagihan',
            'id_operator',
            'tgl_gen',
            'thnbln_per',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
