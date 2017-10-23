<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\blog\models\Articles_comments */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="col-sm-2">
    <?= app\widgets\Nav_blog::widget(); ?>
</div>

<div class="col-sm-10 padding-right">
    <div class="articles-comments-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'articles_id')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'text')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'data')->textInput(['value' => time()]) ?>

        <?= $form->field($model, 'public')->checkbox([ '0', '1', ]) ?>

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>
