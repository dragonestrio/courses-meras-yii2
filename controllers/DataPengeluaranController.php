<?php

namespace app\controllers;

use Yii;
use app\models\DataPengeluaran;
use app\models\DataPengeluaranSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DataPengeluaranController implements the CRUD actions for DataPengeluaran model.
 */
class DataPengeluaranController extends Controller
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
     * Lists all DataPengeluaran models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DataPengeluaranSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DataPengeluaran model.
     * @param string $id_pengeluaran
     * @param string $nim
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_pengeluaran, $nim)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_pengeluaran, $nim),
        ]);
    }

    /**
     * Creates a new DataPengeluaran model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new DataPengeluaran();
        $kode = DataPengeluaran::getPengeluaran();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_pengeluaran' => $model->id_pengeluaran, 'nim' => $model->nim]);
        }

        return $this->render('create', [
            'model' => $model,
            'kode' => $kode
        ]);
    }

    /**
     * Updates an existing DataPengeluaran model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id_pengeluaran
     * @param string $nim
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_pengeluaran, $nim)
    {
        $model = $this->findModel($id_pengeluaran, $nim);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_pengeluaran' => $model->id_pengeluaran, 'nim' => $model->nim]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DataPengeluaran model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id_pengeluaran
     * @param string $nim
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_pengeluaran, $nim)
    {
        $this->findModel($id_pengeluaran, $nim)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DataPengeluaran model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id_pengeluaran
     * @param string $nim
     * @return DataPengeluaran the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_pengeluaran, $nim)
    {
        if (($model = DataPengeluaran::findOne(['id_pengeluaran' => $id_pengeluaran, 'nim' => $nim])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
