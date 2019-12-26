<?php

namespace app\controllers;

use Yii;
use app\models\DataKas;
use app\models\DataKasSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DataKasController implements the CRUD actions for DataKas model.
 */
class DataKasController extends Controller
{
    /**
     * {@inheritdoc}
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
     * Lists all DataKas models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DataKasSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DataKas model.
     * @param integer $id_kas
     * @param string $nim
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_kas, $nim)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_kas, $nim),
        ]);
    }

    /**
     * Creates a new DataKas model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new DataKas();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_kas' => $model->id_kas, 'nim' => $model->nim]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DataKas model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id_kas
     * @param string $nim
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_kas, $nim)
    {
        $model = $this->findModel($id_kas, $nim);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_kas' => $model->id_kas, 'nim' => $model->nim]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DataKas model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id_kas
     * @param string $nim
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_kas, $nim)
    {
        $this->findModel($id_kas, $nim)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DataKas model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id_kas
     * @param string $nim
     * @return DataKas the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_kas, $nim)
    {
        if (($model = DataKas::findOne(['id_kas' => $id_kas, 'nim' => $nim])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
