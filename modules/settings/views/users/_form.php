<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\settings\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="col-sm-2">
    <?= app\widgets\Nav_settings::widget(); ?>
</div>

<div class="col-sm-10 padding-right">
    <div class="users-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'password_hash')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'auth_key')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'rols')->textInput() ?>

        <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'status')->textInput() ?>

        <?= $form->field($model, 'public')->textInput() ?>

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>
