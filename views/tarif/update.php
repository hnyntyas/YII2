<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tarif */

$this->title = 'Update Tarif: ' . $model->no_pdam;
$this->params['breadcrumbs'][] = ['label' => 'Tarifs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_pdam, 'url' => ['view', 'id' => $model->no_pdam]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tarif-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
