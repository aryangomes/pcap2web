<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PacketsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="packets-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'packetId') ?>

    <?= $form->field($model, 'source') ?>

    <?= $form->field($model, 'comment') ?>

    <?= $form->field($model, 'mark') ?>

    <?= $form->field($model, 'timestamp') ?>

    <?php // echo $form->field($model, 'length') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
