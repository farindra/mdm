<?php

use yii\helpers\Html;
use backend\controllers\TabPoController;

/* @var $this yii\web\View */
/* @var $model backend\models\TabPo */

$this->title = 'Create Tab Po';
$this->params['breadcrumbs'][] = ['label' => 'Tab Pos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$defval=$defid;//echo $defval;
?>
<div class="tab-po-create">

    <h1><?= Html::encode($this->title.' ') ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
