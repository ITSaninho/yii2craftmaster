<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Portfolio */

$this->title = $model->id;
//$this->params['breadcrumbs'][] = ['label' => 'Portfolios', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-sm-2">
    <?= app\widgets\Nav_admin::widget(); ?>
</div>

<div class="col-sm-10 padding-right">
    <div class="portfolio-view">

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
                'project_description_ukr:ntext',
                'project_description_eng:ntext',
                'project_description_rus:ntext',
                'client_description_ukr:ntext',
                'client_description_eng:ntext',
                'client_description_rus:ntext',
                'done_description_ukr:ntext',
                'done_description_eng:ntext',
                'done_description_rus:ntext',
                'site_url:ntext',
                'main_tag',
                'other_tags:ntext',
                'images:ntext',
                'other_images:ntext',
            ],
        ]) ?>

    </div>
</div>
