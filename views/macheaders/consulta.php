<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Macheaders */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="macheaders-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-sm-6"><?= Html::dropDownList('column[]',null,$tables,['prompt'=>'Selecione...',
        'class'=>'form-control']) ?>
    </div>
    <div class="col-sm-6">
        <?= Html::input('text','value[]',null,['placeholder'=>'Digite o valor...',
        'class'=>'form-control']) ?>
    </div>

</div>

<div class="row">
    <div class="col-sm-6"><?= Html::dropDownList('column[]',null,$tables,['prompt'=>'Selecione...',
    'class'=>'form-control']) ?>
</div>
<div class="col-sm-6">
    <?= Html::input('text','value[]',null,['placeholder'=>'Digite o valor...',
    'class'=>'form-control']) ?>
</div>

</div>





<div class="form-group">
    <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>

</div>
