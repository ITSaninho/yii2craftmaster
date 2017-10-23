<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\modules\admin\models\Portfolio_tags;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\blog\models\Articles_tagsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Articles Tags';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="col-sm-2">
    <?= app\widgets\Nav_blog::widget(); ?>
</div>

<div class="col-sm-10 padding-right">
    <div class="articles-tags-index">

        <h1><?php //echo Html::encode($this->title) ?></h1>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <p>
            <?= Html::a('Create Articles Tags', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                //'id',
                [
                    'attribute' => 'parent_id',
                    'value' => function($data){
                        $parent = Portfolio_tags::find()->where(['id' => $data->parent_id])->one();
                        return $data->parent_id == '0' ? '<span class="text-danger">Головний тег</span>' : '<span class="text-success">'.$parent->name.'</span>';
                    },
                    'format' => 'html',
                ],
                'name',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>
</div>
