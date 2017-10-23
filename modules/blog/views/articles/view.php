<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\blog\models\Articles */

$this->title = $model->id;
//$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-sm-2">
    <?= app\widgets\Nav_blog::widget(); ?>
</div>

<div class="col-sm-10 padding-right">
    <div class="articles-view">

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
                'title_ukr',
                'title_eng',
                'title_rus',
                'description_ukr:ntext',
                'description_eng:ntext',
                'description_rus:ntext',
                'text_ukr:ntext',
                'text_eng:ntext',
                'text_rus:ntext',
                'site_url:ntext',
                'main_tag',
                'other_tags:ntext',
                'images:ntext',
                'preview_images:ntext',
                'views',
                'public',
            ],
        ]) ?>

    </div>
</div>
