<?php

namespace frontend\controllers;

use Yii;
use common\models\Lgu;
use common\models\LguSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * LguController implements the CRUD actions for Lgu model.
 */
class LguController extends Controller
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
     * Lists all Lgu models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new LguSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Lgu model.
     * @param integer $id
     * @param integer $advisory_id
     * @return mixed
     */
    public function actionView($id, $advisory_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $advisory_id),
        ]);
    }

    /**
     * Creates a new Lgu model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Lgu();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'advisory_id' => $model->advisory_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Lgu model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param integer $advisory_id
     * @return mixed
     */
    public function actionUpdate($id, $advisory_id)
    {
        $model = $this->findModel($id, $advisory_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'advisory_id' => $model->advisory_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Lgu model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param integer $advisory_id
     * @return mixed
     */
    public function actionDelete($id, $advisory_id)
    {
        $this->findModel($id, $advisory_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Lgu model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $advisory_id
     * @return Lgu the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $advisory_id)
    {
        if (($model = Lgu::findOne(['id' => $id, 'advisory_id' => $advisory_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
