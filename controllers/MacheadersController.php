<?php

namespace app\controllers;

use Yii;
use app\models\Macheaders;
use app\models\MacheadersSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MacheadersController implements the CRUD actions for Macheaders model.
 */
class MacheadersController extends Controller {

    public function behaviors() {
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
     * Lists all Macheaders models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new MacheadersSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Macheaders model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Macheaders model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Macheaders();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->packetId]);
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Macheaders model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->packetId]);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Macheaders model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Macheaders model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Macheaders the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Macheaders::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionConsulta() {
        $model = new Macheaders();
        
        $macheadersSearch = null;
        $dataProvider = null;
        $connection = Yii::$app->db; //get connection


        $auxTables = $connection->getTableSchema('macheaders')->columnNames; //returns array of tbl schema's
        foreach ($auxTables as $tbl) {

            $tables[$tbl] = $tbl;
        }

        if (Yii::$app->request->post()) {
            // var_dump(Yii::$app->request->post());
            $post = Yii::$app->request->post();
            $columns = $post['column'];
            $values = $post['value'];

            $macheadersSearch = new MacheadersSearch();
       
            $dataProvider = $macheadersSearch->searchForConsulta($columns, $values);
         
            return $this->render('consulta', [
                        'model' => $model,
                        'tables' => $tables,
                        'searchModel' => $macheadersSearch,
                        'dataProvider' => $dataProvider,
            ]);
            /*   if ($model->load(Yii::$app->request->post()) && $model->save()) {
              return $this->redirect(['view', 'id' => $model->packetId]); */
        } else {
            return $this->render('consulta', [
                        'model' => $model,
                        'tables' => $tables,
                        'searchModel' => $macheadersSearch,
                        'dataProvider' => $dataProvider,
            ]);
        }
    }

}
