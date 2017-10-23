<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Team */

$this->title = $model->id;
//$this->params['breadcrumbs'][] = ['label' => 'Teams', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-sm-2">
    <?= app\widgets\Nav_admin::widget(); ?>
</div>

<div class="col-sm-10 padding-right">
    <div class="team-view">

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
                'username',
                'password_hash:ntext',
                'auth_key:ntext',
                'rols',
                'position',
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
                'rols',
                'public:ntext',
            ],
        ]) ?>

    </div>
</div>
