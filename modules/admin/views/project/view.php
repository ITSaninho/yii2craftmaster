<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Project */

//$this->title = $model->name;
//$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-sm-2">
    <?= app\widgets\Nav_admin::widget(); ?>
</div>

<div class="col-sm-10 padding-right">
    <div class="project-view">

        <h1><?php //echo Html::encode($this->title) ?></h1>

        <p>
            <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ]) ?>
        </p>

        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'id',
                'name',
                'email:email',
                'phone',
                'company',
                [
                    'attribute' => 'data',
                    'format' =>  ['date', 'HH:mm:ss dd.MM.Y'],
                    //'options' => ['width' => '200']
                ],
                'quastion:ntext',
                'process',
            ],
        ]) ?>

    </div>
</div>
