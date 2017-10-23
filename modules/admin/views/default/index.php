<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

?>



<div class="admin-default-index">



    <?php

    //$form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?php // echo $form->field($model, 'username') ?>
    <?php // $form->field($model, 'password_hash')->passwordInput() ?>

    <!--<div class="form-group">-->
        <?php // Html::submitButton('Вхід', ['class' => 'btn btn-primary']) ?>
    <!--</div>-->
    <?php //ActiveForm::end(); ?>

</div>

<div class="col-sm-2">
    <?= app\widgets\Nav_admin::widget(); ?>
</div>

<div class="col-sm-10 padding-right">


</div>
