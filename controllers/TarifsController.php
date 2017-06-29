<?php

namespace app\controllers;

use Yii;
use app\models\Tarifs;
use app\models\TarifsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\components\bahivController;
/**
 * TarifsController implements the CRUD actions for Tarifs model.
 */
class TarifsController extends bahivController
{
    /**
     * @inheritdoc
     */
  /*  public function behaviors()
    {	
        return [	
        	'access' => [
        				'class' =>    AccessControl::className(),
        				'only' => ['index','create', 'update' , 'delete'],
        				'rules' => [
        						[
        								'actions' => ['index','create', 'update' , 'delete'],
        								'allow' => true,
        								'roles' => ['@'],
        						],
        				],
        	],	
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }*/

    /**
     * Lists all Tarifs models.
     * @return mixed
     */
    
	public function actionDetail()
	{
		return $this->render('detail');
	}
	
    
    
    public function actionIndex()
    {
    	$searchModel = new TarifsSearch();
       $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
    
    	return $this->render('index',['dataProvider'=>$dataProvider,
    								   'searchModel'=>$searchModel,
    	]);
    }
    
    
    
    public function actionVideo()
    {
    	
    	return $this->render('video');
    }
    
    
    
    public function actionInternet($id=null)
    {
    	
        return $this->render('internet');
    }

    public function actionTv()
    {
    	//$searchModel = new TarifsSearch();
    	// $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
    
    	return $this->render('tv');
    }
    /**
     * Displays a single Tarifs model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Tarifs model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Tarifs();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Tarifs model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Tarifs model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Tarifs model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Tarifs the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Tarifs::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
    public function actionInttv()
    {
    	return $this->render('inttv');
    }
}
