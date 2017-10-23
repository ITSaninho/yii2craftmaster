<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\PortfolioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Portfolios';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="col-sm-2">
    <?= app\widgets\Nav_admin::widget(); ?>
</div>

<div class="col-sm-10 padding-right">
    <div class="portfolio-index">

        <h1><?php //echo Html::encode($this->title) ?></h1>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <p>
            <?= Html::a('Create Portfolio', ['create'], ['class' => 'btn btn-success']) ?>
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
                'project_description_ukr:ntext',
                // 'project_description_eng:ntext',
                // 'project_description_rus:ntext',
                // 'client_description_ukr:ntext',
                // 'client_description_eng:ntext',
                // 'client_description_rus:ntext',
                // 'done_description_ukr:ntext',
                // 'done_description_eng:ntext',
                // 'done_description_rus:ntext',
                // 'site_url:ntext',
                // 'main_tag',
                // 'other_tags:ntext',
                // 'images:ntext',
                // 'other_images:ntext',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>
</div>
