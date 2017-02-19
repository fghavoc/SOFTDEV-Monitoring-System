<?php

namespace frontend\controllers;

use Yii;
use common\models\CityQuestionnaire;
use common\models\CityQuestionnaireSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CityQuestionnaireController implements the CRUD actions for CityQuestionnaire model.
 */
class CityQuestionnaireController extends Controller
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
     * Lists all CityQuestionnaire models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CityQuestionnaireSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CityQuestionnaire model.
     * @param integer $id
     * @param integer $city_information_id
     * @return mixed
     */
    public function actionView($id, $city_information_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $city_information_id),
        ]);
    }

    /**
     * Creates a new CityQuestionnaire model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CityQuestionnaire();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'city_information_id' => $model->city_information_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing CityQuestionnaire model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param integer $city_information_id
     * @return mixed
     */
    public function actionUpdate($id, $city_information_id)
    {
        $model = $this->findModel($id, $city_information_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'city_information_id' => $model->city_information_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing CityQuestionnaire model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param integer $city_information_id
     * @return mixed
     */
    public function actionDelete($id, $city_information_id)
    {
        $this->findModel($id, $city_information_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CityQuestionnaire model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $city_information_id
     * @return CityQuestionnaire the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $city_information_id)
    {
        if (($model = CityQuestionnaire::findOne(['id' => $id, 'city_information_id' => $city_information_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
