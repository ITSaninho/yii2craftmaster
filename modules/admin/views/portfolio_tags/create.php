<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\modules\blog\models\Articles_tags;
use app\modules\admin\models\Portfolio_tags;


/* @var $this yii\web\View */
/* @var $model app\modules\blog\models\Articles_tags */

$this->title = 'Create Articles Tags';
$this->params['breadcrumbs'][] = ['label' => 'Articles Tags', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="articles-tags-create">

    <h1><?php //echo Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'parent_id',
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
