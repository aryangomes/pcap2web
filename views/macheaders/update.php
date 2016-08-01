<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Macheaders */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Macheaders',
]) . ' ' . $model->packetId;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Macheaders'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->packetId, 'url' => ['view', 'id' => $model->packetId]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="macheaders-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
