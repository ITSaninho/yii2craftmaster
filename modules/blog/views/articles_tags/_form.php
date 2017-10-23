<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\modules\blog\models\Articles_tags;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\modules\blog\models\Articles_tags */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="col-sm-2">
    <?= app\widgets\Nav_blog::widget(); ?>
</div>

<div class="col-sm-10 padding-right">

    <div class="articles-tags-form">

        <?php $form = ActiveForm::begin(); ?>

        <?php
        $tags = Articles_tags::find()->all();

        // формируем массив, с ключем равным полю 'name' и значением равным полю 'name'
        $items = ArrayHelper::map($tags,'id','name');
        $params = [
            'prompt' => 'Головний тег'
        ];

        echo $form->field($model, 'parent_id')->dropDownList($items,$params);
        ?>

        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>
