<?php

namespace frontend\controllers;

use Yii;
use common\models\SuppliesNeeded;
use common\models\SuppliesNeededSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SuppliesNeededController implements the CRUD actions for SuppliesNeeded model.
 */
class SuppliesNeededController extends Controller
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
     * Lists all SuppliesNeeded models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SuppliesNeededSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SuppliesNeeded model.
     * @param integer $id
     * @param integer $lgu_id
     * @param integer $lgu_advisory_id
     * @param integer $suggested_supplies_id
     * @return mixed
     */
    public function actionView($id, $lgu_id, $lgu_advisory_id, $suggested_supplies_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $lgu_id, $lgu_advisory_id, $suggested_supplies_id),
        ]);
    }

    /**
     * Creates a new SuppliesNeeded model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SuppliesNeeded();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'lgu_id' => $model->lgu_id, 'lgu_advisory_id' => $model->lgu_advisory_id, 'suggested_supplies_id' => $model->suggested_supplies_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing SuppliesNeeded model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param integer $lgu_id
     * @param integer $lgu_advisory_id
     * @param integer $suggested_supplies_id
     * @return mixed
     */
    public function actionUpdate($id, $lgu_id, $lgu_advisory_id, $suggested_supplies_id)
    {
        $model = $this->findModel($id, $lgu_id, $lgu_advisory_id, $suggested_supplies_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'lgu_id' => $model->lgu_id, 'lgu_advisory_id' => $model->lgu_advisory_id, 'suggested_supplies_id' => $model->suggested_supplies_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing SuppliesNeeded model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param integer $lgu_id
     * @param integer $lgu_advisory_id
     * @param integer $suggested_supplies_id
     * @return mixed
     */
    public function actionDelete($id, $lgu_id, $lgu_advisory_id, $suggested_supplies_id)
    {
        $this->findModel($id, $lgu_id, $lgu_advisory_id, $suggested_supplies_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SuppliesNeeded model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $lgu_id
     * @param integer $lgu_advisory_id
     * @param integer $suggested_supplies_id
     * @return SuppliesNeeded the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $lgu_id, $lgu_advisory_id, $suggested_supplies_id)
    {
        if (($model = SuppliesNeeded::findOne(['id' => $id, 'lgu_id' => $lgu_id, 'lgu_advisory_id' => $lgu_advisory_id, 'suggested_supplies_id' => $suggested_supplies_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
