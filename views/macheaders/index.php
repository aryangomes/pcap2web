<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MacheadersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Macheaders');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="macheaders-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Macheaders'), ['consulta'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        'packetId',
        'protocolVersion',
        'type',
        'subtype',
        'toDS',
            // 'fromDS',
            // 'moreFragments',
            // 'retry',
            // 'powerMgmt',
            // 'moreData',
            // 'protectedFrame',
            // 'ord',
            // 'durationId',
            // 'addr1',
            // 'addr2',
            // 'addr3',
            // 'fragmentNumber',
            // 'seqNumber',
            // 'addr4',
            // 'QoSControl',
            // 'HTControl',

        ['class' => 'yii\grid\ActionColumn'],
        ],
        ]); ?>

    </div>
