<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TagihanM */

$this->title = 'Update Tagihan M: ' . $model->id_tagihan;
$this->params['breadcrumbs'][] = ['label' => 'Tagihan Ms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_tagihan, 'url' => ['view', 'id' => $model->id_tagihan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tagihan-m-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
