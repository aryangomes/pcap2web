<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Macheaders */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="macheaders-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'packetId')->textInput() ?>

    <?= $form->field($model, 'protocolVersion')->textInput() ?>

    <?= $form->field($model, 'type')->textInput() ?>

    <?= $form->field($model, 'subtype')->textInput() ?>

    <?= $form->field($model, 'toDS')->textInput() ?>

    <?= $form->field($model, 'fromDS')->textInput() ?>

    <?= $form->field($model, 'moreFragments')->textInput() ?>

    <?= $form->field($model, 'retry')->textInput() ?>

    <?= $form->field($model, 'powerMgmt')->textInput() ?>

    <?= $form->field($model, 'moreData')->textInput() ?>

    <?= $form->field($model, 'protectedFrame')->textInput() ?>

    <?= $form->field($model, 'ord')->textInput() ?>

    <?= $form->field($model, 'durationId')->textInput() ?>

    <?= $form->field($model, 'addr1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'addr2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'addr3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fragmentNumber')->textInput() ?>

    <?= $form->field($model, 'seqNumber')->textInput() ?>

    <?= $form->field($model, 'addr4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'QoSControl')->textInput() ?>

    <?= $form->field($model, 'HTControl')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
