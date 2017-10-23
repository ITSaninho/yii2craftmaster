<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\blog\models\ArticlestSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Articles';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="col-sm-2">
    <?= app\widgets\Nav_blog::widget(); ?>
</div>

<div class="col-sm-10 padding-right">
    <div class="articles-index">

        <h1><?php //echo Html::encode($this->title) ?></h1>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <p>
            <?= Html::a('Create Articles', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'id',
                'title_ukr',
                'title_eng',
                'title_rus',
                'description_ukr:ntext',
                // 'description_eng:ntext',
                // 'description_rus:ntext',
                // 'text_ukr:ntext',
                // 'text_eng:ntext',
                // 'text_rus:ntext',
                // 'site_url:ntext',
                // 'main_tag',
                // 'other_tags:ntext',
                // 'images:ntext',
                // 'preview_images:ntext',
                // 'views',
                // 'public',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>
</div>
