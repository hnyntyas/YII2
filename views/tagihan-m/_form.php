<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TagihanM */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tagihan-m-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_tagihan')->textInput() ?>

    <?= $form->field($model, 'id_operator')->textInput() ?>

    <?= $form->field($model, 'tgl_gen')->textInput() ?>

    <?= $form->field($model, 'thnbln_per')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
