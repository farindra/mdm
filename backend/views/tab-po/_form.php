<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TabPo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tab-po-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'PO_No')->textInput(['maxlength' => true,'readonly'=>true]) ?>

    <?= $form->field($model, 'PO_Date')->textInput() ?>

    <?= $form->field($model, 'PO_Time')->textInput() ?>

    <?= $form->field($model, 'PO_Status')->textInput() ?>

    <?= $form->field($model, 'PO_Subtotal')->textInput() ?>

    <?= $form->field($model, 'PO_Qty')->textInput() ?>

    <?= $form->field($model, 'PO_Grandtotal')->textInput() ?>

    <?= $form->field($model, 'User_Create')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'User_Approve')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UPDT')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update' , ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
