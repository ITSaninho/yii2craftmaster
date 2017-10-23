<?php

namespace app\widgets;

use yii;
use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Url;


class Nav_blog extends Widget{

    public function init(){
        parent::init();
    }
    /**
     * Запуск виджета
     */
    public function run()
    {
        return $this->render('nav_blog');
    }

}