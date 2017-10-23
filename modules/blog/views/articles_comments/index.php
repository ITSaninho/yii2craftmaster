<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\blog\models\Articles_commentsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Articles Comments';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="col-sm-2">
    <?= app\widgets\Nav_blog::widget(); ?>
</div>

<div class="col-sm-10 padding-right">
    <div class="articles-comments-index">

        <h1><?php //echo Html::encode($this->title) ?></h1>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <p>
            <?= Html::a('Create Articles Comments', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                //'id',
                [

                    'attribute' => 'articles_id',
                    'value' => function($data){
                        return $data->articles->title_ukr;
                    },
                    'label'=>'name_lessons',
                    //'header' => 'Назва статті'
                ],
                'text',
                [
                    'attribute' => 'public',
                    'value' => function($data){
                        return !$data->public ? '<span class="text-danger">Відключений</span>' : '<span class="text-success">Активований</span>';
                    },
                    'format' => 'html',
                ],

                // 'comment_date',
                [
                    'attribute' => 'data',
                    'format' =>  ['date', 'HH:mm:ss dd.MM.Y'],
                    //'options' => ['width' => '200']
                ],

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>
</div>
