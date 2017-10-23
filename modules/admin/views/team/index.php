<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\TeamSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Teams';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-sm-3">
    <?= app\widgets\Nav_admin::widget(); ?>
</div>
<div class="team-index">

    <h1><?php //echo Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Team', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            'password_hash:ntext',
            'auth_key:ntext',
            'rols',
            // 'image',
            // 'position',
            // 'status',
            // 'public',
            [
                'attribute' => 'image',
                'label' => 'image',
                'format' => 'raw',
                'value' => function($data){
                    return Html::img('/web/data/team/images/'.$data->image,[
                        //'alt'=>'yii2 - картинка в gridview',
                        'style' => 'width:100px;'
                    ]);
                },
            ],
            'position',
            [
                'attribute' => 'status',
                'value' => function($data){
                    if($data->status == '1'){
                        return '<span class="text-danger">Оффлайн</span>';
                    }elseif ($data->status == '10')
                        return '<span class="text-success">Онлайн</span>';
                },
                'format' => 'html',
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
