<?php

namespace app\modules\blog\controllers;

use Yii;
use app\modules\blog\models\Articles;
use app\modules\blog\models\ArticlesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\modules\blog\models\Articles_tags;
use yii\web\UploadedFile;
/**
 * ArticlesController implements the CRUD actions for Articles model.
 */
class ArticlesController extends Controller
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
     * Lists all Articles models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ArticlesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    public function actionLists($id){

        $countBranches = Articles_tags::find()->where(['parent_id' => $id])->count();
        $branches      = Articles_tags::find()->where(['parent_id' => $id])->all();
        //echo 'da';
        if(count($countBranches) > 0){
            foreach ($branches as $branch) {

                echo "<option value='" . $branch->name . "'>" . $branch->name . "</option>";
                //echo "<input type='checkbox' value='".$branch->name."'><label>".$branch->name."</label>";
                //echo "<input type='checkbox' value='".$branch->name."'><label>".$branch->name."</label>";
            }
        }else{
            echo "<option>-</option>";
            //echo "netu";
        }

    }


    /**
     * Displays a single Articles model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Articles model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */


    public function actionCreate()
    {
        //if(Yii::$app->user->id >= 2) {
        $model = new Articles();

        if ($id = Yii::$app->request->post('id')) {
            $operationPosts = Articles_tags::find()
                ->where(['parent_id' => $id])
                ->count();


            if ($operationPosts > 0) {
                $operations = Articles_tags::find()
                    ->where(['parent_id' => $id])
                    ->all();
                foreach ($operations as $operation)
                    echo "<option value='" . $operation->id . "'>" . $operation->name . "</option>";
            } else{
                echo "<option>-</option>";
            }

        }


        if ($model->load(Yii::$app->request->post())) {


            if(!empty($model->images = UploadedFile::getInstance($model, 'images'))){
                $model->images->saveAs('../web/data/articles/images/' . $model->images->baseName . '.' . $model->images->extension);
                $model->images = $model->images->baseName . '.' . $model->images->extension;
                $model->preview_images = $model->images;
            }else{
                $model->images = 'no_photo.jpg';
                $model->preview_images = 'no_photo.jpg';
            }
            $model->date = strtotime($model->date);
            //$model->publication_date = time();


            $model->other_tags = implode(", ", $model->other_tags);

            $model->save();



            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', compact('model'));
        }

        //}else{
        //$this->redirect('/admin/default/index');
        //}
    }

    /**
     * Updates an existing Articles model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        //if(Yii::$app->user->id >= 2) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {

            if(!empty($model->images = UploadedFile::getInstance($model, 'images'))){
                $model->images->saveAs('../web/data/articles/images/' . $model->images->baseName . '.' . $model->images->extension);
                $model->images = $model->images->baseName . '.' . $model->images->extension;
            }
            $model->save();
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
     * Deletes an existing Articles model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Articles model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Articles the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Articles::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
