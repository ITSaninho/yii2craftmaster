<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use mihaildev\ckeditor\CKEditor;
use app\modules\blog\models\Articles_tags;
use yii\helpers\ArrayHelper;//Для droplist select
use yii\widgets\Pjax;
use kartik\datetime\DateTimePicker;


/* @var $this yii\web\View */
/* @var $model app\modules\blog\models\Articles */
/* @var $form yii\widgets\ActiveForm */
?>

<?php
$script = <<< JS
$(document).ready(function() {
    setInterval(function(){
        $('#refreshButton').click();
    }, 3000);
});
JS;
$this->registerJs($script);
?>

<div class="col-sm-2">
    <?= app\widgets\Nav_blog::widget(); ?>
</div>

<div class="col-sm-10 padding-right">
    <div class="articles-form">

        <?php Pjax::begin(); ?>
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
                echo $form->field($model, 'description_ukr')->widget(CKEditor::className(),[
                    'editorOptions' => [
                        'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                        'inline' => false, //по умолчанию false
                        //'rows' => '6',
                    ],
                ]);
                echo  $form->field($model, 'text_ukr')->widget(CKEditor::className(),[
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

                echo $form->field($model, 'description_rus')->widget(CKEditor::className(),[
                    'editorOptions' => [
                        'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                        'inline' => false, //по умолчанию false
                        //'rows' => '6',
                    ],
                ]);

                echo  $form->field($model, 'text_rus')->widget(CKEditor::className(),[
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

                echo $form->field($model, 'description_eng')->widget(CKEditor::className(),[
                    'editorOptions' => [
                        'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                        'inline' => false, //по умолчанию false
                        //'rows' => '6',
                    ],
                ]);

                echo  $form->field($model, 'text_eng')->widget(CKEditor::className(),[
                    'editorOptions' => [
                        'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                        'inline' => false, //по умолчанию false
                    ],
                ]);


                ?>
            </div>
        </div>

        <?= $form->field($model, 'site_url')->textInput() ?>

        <?php

        $tags = Articles_tags::find()->where(['parent_id' => '0'])->all();
        $items = ArrayHelper::map($tags,'id','name');

        echo $form->field($model, 'main_tag')->dropDownList($items,
            [
                'prompt' => 'Select Company',
                'onchange' => '
                $.post("lists?id='.'"+$(this).val(), function(data){
                    $("select#da").html(data);
                });'
            ]
        );

        echo $form->field($model, 'other_tags')->listBox(ArrayHelper::map(Articles_tags::find()->where(['not in', 'parent_id',['0']])->all(), 'name', 'name'),
            [
                //'prompt' => 'Виборіть тегі',
                'id' => 'da',
                'maxlength' => 255,
                'multiple' => true
            ]
        );


        ?>

        <?= $form->field($model, 'images')->fileInput(); ?>

        <?= $form->field($model, 'preview_images')->hiddenInput()->label(false) ?>


        <?php

        echo $form->field($model, 'date')->widget(DateTimePicker::classname(), [
            'name' => 'data',
            'value' => date('d-M-Y'),
            'options' => ['placeholder' => 'Виберіть дату ...'],
            'removeButton' => false,
            'convertFormat' => true,
            //'convertFormat' => true,
            'pluginOptions' => [
                'format' => 'dd-MM-yyyy HH:i',
                //'startDate' => '01-Mar-2014 12:00 AM',
                'todayHighlight' => true,
                'autoclose' => true,
                //'format' => 'dd-M-yyyy hh:ii'
                'todayBtn'=>true, //снизу кнопка "сегодня"
            ]
        ]);

        ?>

        <?= $form->field($model, 'public')->textInput() ?>


        <?= $form->field($model, 'views')->textInput(['readonly' => true, 'value' => '0'])->hiddenInput()->label(false) ?>

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>
        <?php Pjax::end(); ?>

    </div>
</div>

