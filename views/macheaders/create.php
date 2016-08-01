<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Macheaders */

$this->title = Yii::t('app', 'Create Macheaders');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Macheaders'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="macheaders-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
