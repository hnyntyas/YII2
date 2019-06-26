<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pemakaian */

$this->title = 'Create Pemakaian';
$this->params['breadcrumbs'][] = ['label' => 'Pemakaians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemakaian-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
