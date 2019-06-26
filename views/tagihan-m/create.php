<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TagihanM */

$this->title = 'Create Tagihan M';
$this->params['breadcrumbs'][] = ['label' => 'Tagihan Ms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tagihan-m-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
