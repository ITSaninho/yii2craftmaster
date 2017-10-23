<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>


<?php
NavBar::begin([
    'brandLabel' => 'Craft Develop',
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar-inverse',
    ],
]);
echo Nav::widget([
    'options' => ['class' => 'navbar-nav navbar-right'],
    'items' => [
        ['label' => 'Налаштування', 'url' => ['/settings/default/index']],
        ['label' => 'Модуль блог', 'url' => ['/blog/default/index']],
        ['label' => 'Модуль адмін', 'url' => ['/admin/default/index']],
        ['label' => 'Вихід', 'url' => ['/admin/default/index']],
    ],
]);
NavBar::end();
?>

<!--<div class="container">-->
<?php

/*
echo Breadcrumbs::widget([
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    //'tag' =>  'li',
])
*/

?>
<?= $content ?>
<!--</div>-->



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
