<?php

namespace backend\controllers;

use Yii;
use backend\models\TabPo;
use backend\models\TabPoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TabPoController implements the CRUD actions for TabPo model.
 */
class TabPoController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all TabPo models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TabPoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TabPo model.
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
     * Creates a new TabPo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TabPo();
        //$defupdt=date("Y-m-d H:i:s");
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
          //  $model->PO_Status='9';
          //  $model->UPDT=$defupdt;
          //  $model->save();
          //  $model = TabPo::find()->where(['UPDT'=>$defupdt])->one();
          //  $defids=$model->PO_No;
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    public function actionCreateId()
    {
        $model = new TabPo();
        $defupdt=date("Y-m-d H:i:s");
        $model->PO_Status='9';
        $model->UPDT=$defupdt;
        $model->save();

        $model = TabPo::find()->where(['UPDT'=>$defupdt])->one();

        return $this->render('update', [
            'model' => $model,
            ]);
    }
    /**
     * Updates an existing TabPo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
       if($id=='0'){
            $model = new TabPo();
            $defupdt=date("Y-m-d H:i:s");
            $model->PO_Status='9';
            $model->UPDT=$defupdt;
            $model->save();
            $model = TabPo::find()->where(['UPDT'=>$defupdt])->one();
            //$defids=$model->id;
            //$id=$defids;
        }else{
            $model = $this->findModel($id);
        }


        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
            //return $this->redirect(['view', 'id' => '136']);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing TabPo model.
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
     * Finds the TabPo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TabPo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TabPo::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
