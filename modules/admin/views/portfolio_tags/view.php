<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;
use app\modules\admin\models\Portfolio_tags;

/* @var $this yii\web\View */
/* @var $model app\modules\blog\models\Articles_tags */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Articles Tags', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="col-sm-2">
    <?= app\widgets\Nav_blog::widget(); ?>
</div>

<div class="col-sm-10 padding-right">
    <div class="articles-tags-view">

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
                [
                    'attribute' => 'parent_id',
                    'value' => function($data){
                        $parent = Portfolio_tags::find()->where(['id' => $data->parent_id])->one();
                        return $data->parent_id == '0' ? '<span class="text-danger">Головний тег</span>' : '<span class="text-success">'.$parent->name.'</span>';
                    },
                    'format' => 'html',
                ],
                'name',
            ],
        ]) ?>

    </div>
</div>
