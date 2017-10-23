<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\settings\models\UsersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="col-sm-2">
    <?= app\widgets\Nav_settings::widget(); ?>
</div>

<div class="col-sm-10 padding-right">
    <div class="users-search">

        <?php $form = ActiveForm::begin([
            'action' => ['index'],
            'method' => 'get',
        ]); ?>

        <?= $form->field($model, 'id') ?>

        <?= $form->field($model, 'username') ?>

        <?= $form->field($model, 'password_hash') ?>

        <?= $form->field($model, 'auth_key') ?>

        <?= $form->field($model, 'rols') ?>

        <?php // echo $form->field($model, 'image') ?>

        <?php // echo $form->field($model, 'status') ?>

        <?php // echo $form->field($model, 'public') ?>

        <div class="form-group">
            <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
            <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>
