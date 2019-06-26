<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pemakaian */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pemakaian-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_pdam')->textInput() ?>

    <?= $form->field($model, 'id_tagihan')->textInput() ?>

    <?= $form->field($model, 'pemakaian_per_m3')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
