<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\blog\models\Articles_commentsSearch */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="col-sm-2">
    <?= app\widgets\Nav_blog::widget(); ?>
</div>

<div class="col-sm-10 padding-right">
    <div class="articles-comments-search">

        <?php $form = ActiveForm::begin([
            'action' => ['index'],
            'method' => 'get',
        ]); ?>

        <?= $form->field($model, 'id') ?>

        <?= $form->field($model, 'articles_id') ?>

        <?= $form->field($model, 'text') ?>

        <?= $form->field($model, 'data') ?>

        <?= $form->field($model, 'public') ?>

        <div class="form-group">
            <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
            <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>
