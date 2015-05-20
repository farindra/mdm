<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TabPoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tab-po-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'PO_No') ?>

    <?= $form->field($model, 'PO_Date') ?>

    <?= $form->field($model, 'PO_Time') ?>

    <?= $form->field($model, 'PO_Status') ?>

    <?php // echo $form->field($model, 'PO_Subtotal') ?>

    <?php // echo $form->field($model, 'PO_Qty') ?>

    <?php // echo $form->field($model, 'PO_Grandtotal') ?>

    <?php // echo $form->field($model, 'User_Create') ?>

    <?php // echo $form->field($model, 'User_Approve') ?>

    <?php // echo $form->field($model, 'UPDT') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
