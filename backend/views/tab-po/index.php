<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TabPoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tab Pos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tab-po-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tab Po', ['update','id'=>'0'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'PO_No',
            'PO_Date',
            'PO_Time',
            'PO_Status',
            'PO_Subtotal',
            'PO_Qty',
            'PO_Grandtotal',
            'User_Create',
            'User_Approve',
            'UPDT',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
