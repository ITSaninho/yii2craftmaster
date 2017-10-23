<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use app\modules\admin\models\Portfolio_tags;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Portfolio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="col-sm-2">
    <?= app\widgets\Nav_admin::widget(); ?>
</div>

<div class="col-sm-10 padding-right">
    <div class="portfolio-form">


        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Укр</a></li>
            <li><a data-toggle="tab" href="#menu1">Рус</a></li>
            <li><a data-toggle="tab" href="#menu2">Eng</a></li>
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <?php

                echo $form->field($model, 'title_ukr')->textInput();

                echo $form->field($model, 'project_description_ukr')->widget(CKEditor::className(),[
                    'editorOptions' => [
                        'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                        'inline' => false, //по умолчанию false
                        //'rows' => '6',
                    ],
                ]);

                echo  $form->field($model, 'client_description_ukr')->widget(CKEditor::className(),[
                    'editorOptions' => [
                        'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                        'inline' => false, //по умолчанию false
                    ],
                ]);

                echo  $form->field($model, 'done_description_ukr')->widget(CKEditor::className(),[
                    'editorOptions' => [
                        'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                        'inline' => false, //по умолчанию false
                    ],
                ]);


                ?>
            </div>
            <div id="menu1" class="tab-pane fade">
                <?php

                echo $form->field($model, 'title_rus')->textInput();

                echo $form->field($model, 'project_description_rus')->widget(CKEditor::className(),[
                    'editorOptions' => [
                        'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                        'inline' => false, //по умолчанию false
                        //'rows' => '6',
                    ],
                ]);

                echo  $form->field($model, 'client_description_rus')->widget(CKEditor::className(),[
                    'editorOptions' => [
                        'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                        'inline' => false, //по умолчанию false
                    ],
                ]);

                echo  $form->field($model, 'done_description_rus')->widget(CKEditor::className(),[
                    'editorOptions' => [
                        'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                        'inline' => false, //по умолчанию false
                    ],
                ]);


                ?>
            </div>
            <div id="menu2" class="tab-pane fade">
                <?php

                echo $form->field($model, 'title_eng')->textInput();

                echo $form->field($model, 'project_description_eng')->widget(CKEditor::className(),[
                    'editorOptions' => [
                        'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                        'inline' => false, //по умолчанию false
                        //'rows' => '6',
                    ],
                ]);

                echo  $form->field($model, 'client_description_eng')->widget(CKEditor::className(),[
                    'editorOptions' => [
                        'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                        'inline' => false, //по умолчанию false
                    ],
                ]);

                echo  $form->field($model, 'done_description_eng')->widget(CKEditor::className(),[
                    'editorOptions' => [
                        'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                        'inline' => false, //по умолчанию false
                    ],
                ]);


                ?>
            </div>
        </div>

        <?= $form->field($model, 'site_url')->textInput(['maxlength' => true]) ?>

        <?php


        $tags = Portfolio_tags::find()->where(['parent_id' => '0'])->all();

        // формируем массив, с ключем равным полю 'name' и значением равным полю 'name'
        $items = ArrayHelper::map($tags,'id','name');
        $params = [
            'prompt' => 'Виберіть головний тег',
            'onchange' => '
                $.post(
                    "' . Url::toRoute('create') . '", 
                    {id: $(this).val()}, 
                    function(res){
                        $("#da").html(res);
                    }
                );
        ',
        ];

        ?>

        <?= $form->field($model, 'main_tag')->dropDownList($items,
            [
                'prompt' => 'Select Company',
                'onchange' => '
                $.post("lists?id='.'"+$(this).val(), function(data){
                    $("select#da").html(data);
                });'
            ]
        ) ?>


        <?php

        echo $form->field($model, 'other_tags')->listBox(ArrayHelper::map(Portfolio_tags::find()->where(['not in', 'parent_id',['0']])->all(), 'name', 'name'),
            [
                //'prompt' => 'Виборіть тегі',
                'id' => 'da',
                'maxlength' => 255,
                'multiple' => true
            ]
        )

        ?>

        <?= $form->field($model, 'site_url')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'images')->fileInput() ?>

        <?= $form->field($model, 'other_images')->textInput(['maxlength' => true]) ?>

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>
