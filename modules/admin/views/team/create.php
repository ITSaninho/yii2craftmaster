<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Team */

//$this->title = 'Create Team';
//$this->params['breadcrumbs'][] = ['label' => 'Teams', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="team-create">

    <h1><?php //echo Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
