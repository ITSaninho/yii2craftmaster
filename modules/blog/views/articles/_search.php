<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\blog\models\ArticlestSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="col-sm-2">
    <?= app\widgets\Nav_blog::widget(); ?>
</div>

<div class="col-sm-10 padding-right">
    <div class="articles-search">

        <?php $form = ActiveForm::begin([
            'action' => ['index'],
            'method' => 'get',
        ]); ?>

        <?= $form->field($model, 'id') ?>

        <?= $form->field($model, 'title_ukr') ?>

        <?= $form->field($model, 'title_eng') ?>

        <?= $form->field($model, 'title_rus') ?>

        <?= $form->field($model, 'description_ukr') ?>

        <?php // echo $form->field($model, 'description_eng') ?>

        <?php // echo $form->field($model, 'description_rus') ?>

        <?php // echo $form->field($model, 'text_ukr') ?>

        <?php // echo $form->field($model, 'text_eng') ?>

        <?php // echo $form->field($model, 'text_rus') ?>

        <?php // echo $form->field($model, 'site_url') ?>

        <?php // echo $form->field($model, 'main_tag') ?>

        <?php // echo $form->field($model, 'other_tags') ?>

        <?php // echo $form->field($model, 'images') ?>

        <?php // echo $form->field($model, 'preview_images') ?>

        <?php // echo $form->field($model, 'views') ?>

        <?php // echo $form->field($model, 'public') ?>

        <div class="form-group">
            <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
            <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>
