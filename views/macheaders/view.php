<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Macheaders */

$this->title = $model->packetId;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Macheaders'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="macheaders-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->packetId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->packetId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'packetId',
            'protocolVersion',
            'type',
            'subtype',
            'toDS',
            'fromDS',
            'moreFragments',
            'retry',
            'powerMgmt',
            'moreData',
            'protectedFrame',
            'ord',
            'durationId',
            'addr1',
            'addr2',
            'addr3',
            'fragmentNumber',
            'seqNumber',
            'addr4',
            'QoSControl',
            'HTControl',
        ],
    ]) ?>

</div>
