<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ContactsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '留言';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contacts-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'export'=>false,
      //  'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'Id',
            'name',
            'phone',
            'address',
            'content:ntext',
            [
            'attribute'=>'created_at',
            'format' => ['date', 'php:Y年m月d日 h:i:s'],
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
        'containerOptions' => ['style'=>'overflow: auto'],
        'pjax' => false,
        'resizableColumns'=>true,
        'bordered' => true,
        'striped' => true,
        'toolbar' => false,
        'condensed' => false,
        'responsive' => true,
        'hover' => true,
        'showPageSummary' => false,
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading'=>$this->title ,
        ],
    ]); ?>
</div>
