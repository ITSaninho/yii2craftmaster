<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datetime\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Project */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="col-sm-2">
    <?= app\widgets\Nav_admin::widget(); ?>
</div>

<div class="col-sm-10 padding-right">
    <div class="project-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'company')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'data')->widget(DateTimePicker::classname(), [
            'name' => 'data',
            'value' => date('d-M-Y'),
            'options' => ['placeholder' => 'Виберіть дату ...'],
            'removeButton' => false,
            'convertFormat' => true,
            //'convertFormat' => true,
            'pluginOptions' => [
                'format' => 'dd-MM-yyyy HH:i',
                //'startDate' => '01-Mar-2014 12:00 AM',
                'todayHighlight' => true,
                'autoclose' => true,
                //'format' => 'dd-M-yyyy hh:ii'
                'todayBtn'=>true, //снизу кнопка "сегодня"
            ]
        ]);

        ?>

        <?= $form->field($model, 'quastion')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'process')->textInput() ?>

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>
