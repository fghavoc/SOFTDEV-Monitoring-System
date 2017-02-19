<?php

namespace frontend\controllers;

use Yii;
use common\models\Advisory;
use common\models\AdvisorySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AdvisoryController implements the CRUD actions for Advisory model.
 */
class AdvisoryController extends Controller
{
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
     * Lists all Advisory models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AdvisorySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Advisory model.
     * @param integer $id
     * @param integer $ndrrmc_id
     * @return mixed
     */
    public function actionView($id, $ndrrmc_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $ndrrmc_id),
        ]);
    }

    /**
     * Creates a new Advisory model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Advisory();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'ndrrmc_id' => $model->ndrrmc_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Advisory model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param integer $ndrrmc_id
     * @return mixed
     */
    public function actionUpdate($id, $ndrrmc_id)
    {
        $model = $this->findModel($id, $ndrrmc_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'ndrrmc_id' => $model->ndrrmc_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Advisory model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param integer $ndrrmc_id
     * @return mixed
     */
    public function actionDelete($id, $ndrrmc_id)
    {
        $this->findModel($id, $ndrrmc_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Advisory model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $ndrrmc_id
     * @return Advisory the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $ndrrmc_id)
    {
        if (($model = Advisory::findOne(['id' => $id, 'ndrrmc_id' => $ndrrmc_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
