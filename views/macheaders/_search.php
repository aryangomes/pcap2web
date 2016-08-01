<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MacheadersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="macheaders-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'packetId') ?>

    <?= $form->field($model, 'protocolVersion') ?>

    <?= $form->field($model, 'type') ?>

    <?= $form->field($model, 'subtype') ?>

    <?= $form->field($model, 'toDS') ?>

    <?php // echo $form->field($model, 'fromDS') ?>

    <?php // echo $form->field($model, 'moreFragments') ?>

    <?php // echo $form->field($model, 'retry') ?>

    <?php // echo $form->field($model, 'powerMgmt') ?>

    <?php // echo $form->field($model, 'moreData') ?>

    <?php // echo $form->field($model, 'protectedFrame') ?>

    <?php // echo $form->field($model, 'ord') ?>

    <?php // echo $form->field($model, 'durationId') ?>

    <?php // echo $form->field($model, 'addr1') ?>

    <?php // echo $form->field($model, 'addr2') ?>

    <?php // echo $form->field($model, 'addr3') ?>

    <?php // echo $form->field($model, 'fragmentNumber') ?>

    <?php // echo $form->field($model, 'seqNumber') ?>

    <?php // echo $form->field($model, 'addr4') ?>

    <?php // echo $form->field($model, 'QoSControl') ?>

    <?php // echo $form->field($model, 'HTControl') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
