<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TagihanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tagihan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_tagihan') ?>

    <?= $form->field($model, 'no_pdam') ?>

    <?= $form->field($model, 'id_user') ?>

    <?= $form->field($model, 'jmlbln_lalu') ?>

    <?= $form->field($model, 'jmlbln_ini') ?>

    <?php // echo $form->field($model, 'harga_satuan') ?>

    <?php // echo $form->field($model, 'tgl_bayar') ?>

    <?php // echo $form->field($model, 'status_bayar') ?>

    <?php // echo $form->field($model, 'jumlah_bayar') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
