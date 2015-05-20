<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TabPo */

$this->title = 'Update Tab Po: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tab Pos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tab-po-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
