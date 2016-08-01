<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Packets */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="packets-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'packetId')->textInput() ?>

    <?= $form->field($model, 'source')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comment')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'mark')->textInput() ?>

    <?= $form->field($model, 'timestamp')->textInput() ?>

    <?= $form->field($model, 'length')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
