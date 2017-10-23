<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
        'css/main.css',
        "https://fonts.googleapis.com/css?family=Roboto:300,700&amp;subset=cyrillic,cyrillic-ext,greek-ext,latin-ext",
    ];
    public $js = [
        //'js/main.js',
        'js/vue.min.js',
        'js/vue-carousel-3d.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
