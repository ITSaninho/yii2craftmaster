<?php

namespace app\modules\blog\controllers;

use Yii;
use app\modules\blog\models\Articles_tags;
use app\modules\blog\models\Articles_tagsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * Tags_articlesController implements the CRUD actions for Tags_articles model.
 */
class Articles_tagsController extends Controller
{

    public $layout = 'admin';
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Tags_articles models.
     * @return mixed
     */
    public function actionIndex()
    {

        //if(Yii::$app->user->id >= 2) {
        $searchModel = new Articles_tagsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
        //}else{
        //$this->redirect('/admin/default/index');
        //}
    }

    /**
     * Displays a single Tags_articles model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        //if(Yii::$app->user->id >= 2) {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
        //}else{
        //$this->redirect('/admin/default/index');
        //}
    }

    /**
     * Creates a new Tags_articles model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        //if(Yii::$app->user->id >= 2) {
        $model = new Articles_tags();

        $searchModel = new Articles_tagsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);


        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
        }
        //}else{
        //$this->redirect('/admin/default/index');
        //}
    }

    /**
     * Updates an existing Tags_articles model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        //if(Yii::$app->user->id >= 2) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
        //}else{
        //$this->redirect('/admin/default/index');
        //}
    }

    /**
     * Deletes an existing Tags_articles model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        //if(Yii::$app->user->id >= 3) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
        //}else{
        //$this->redirect('/admin/default/index');
        //}
    }

    /**
     * Finds the Tags_articles model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Tags_articles the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        //if(Yii::$app->user->id >= 2) {
        if (($model = Articles_tags::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
        //}else{
        //$this->redirect('/admin/default/index');
        //}
    }
}
