<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\blog\models\Articles_comments */

$this->title = $model->id;
//$this->params['breadcrumbs'][] = ['label' => 'Articles Comments', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>


<div class="col-sm-2">
    <?= app\widgets\Nav_blog::widget(); ?>
</div>

<div class="col-sm-10 padding-right">
    <div class="articles-comments-view">

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
                'articles_id',
                'text',

                [
                    'attribute' => 'public',
                    'value' => function($data){
                        return !$data->public ? '<span class="text-danger">Відключений</span>' : '<span class="text-success">Активований</span>';
                    },
                    'format' => 'html',
                ],
                //'comment_date',
                [
                    'attribute' => 'data',
                    'format' =>  ['date', 'HH:mm:ss dd.MM.Y'],
                    //'options' => ['width' => '200']
                ],
            ],
        ]) ?>

    </div>
</div>
