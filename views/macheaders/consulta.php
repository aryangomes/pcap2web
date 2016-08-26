<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Macheaders */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="macheaders-form">

    <?php $form = ActiveForm::begin(); ?>
    <div id="form-selecao">
        <div id="selecao" class="row">
            <div class="col-sm-6">
                <?= Html::label("Coluna:")?>
                <?=
                Html::dropDownList('column[]', null, $tables, ['prompt' => 'Selecione...',
                    'class' => 'form-control'])
                ?>
            </div>
            <div class="col-sm-6">
                   <?= Html::label("Valor:")?>
                <?=
                Html::input('text', 'value[]', null, ['placeholder' => 'Digite o valor...',
                    'class' => 'form-control'])
                ?>
                </br>
            </div>
        </div>
    </div>

    <?php
    $this->registerJsFile(\Yii::getAlias("@web") . '/js/macheaders-consulta.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
    ?>



    </br>   
    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Consultar'), ['class' => 'btn btn-success', 'id' => 'btConsultar']) ?>
        <?=
        Html::button('Adicionar seleção', ['class' => 'btn btn-primary',
            'id' => 'btAdicionarSelecao'])
        ?>
        <p>
        <div id="consulta-errors" class="alert"></div>
        </p>
    </div>

<?php ActiveForm::end(); ?>

</div>
<?php
if ($dataProvider != null && $searchModel != null) {
    ?>
    <div class="macheaders-index">


        <?=
        GridView::widget([
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
        ]);
        ?>

    </div>
    <?php
}
?>