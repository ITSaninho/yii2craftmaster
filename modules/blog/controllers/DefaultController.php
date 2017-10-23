<?php

namespace app\modules\blog\controllers;


use Yii;
use yii\web\Controller;
use app\models\LoginForm;

/**
 * Default controller for the `blog` module
 */
class DefaultController extends Controller
{

    public $layout = 'admin';
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        //$model = new Team();

        if (!Yii::$app->user->isGuest) {
            echo "Hello";
        }
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            echo "Ви авторизувались успішно";
        }
        return $this->render('index', [
            'model' => $model,
        ]);


        /*

        if ($model->load(Yii::$app->request->post())) {

        }

        return $this->render('index', compact('model'));

        */

    }
}
