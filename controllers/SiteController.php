<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Macheaders;
use app\models\MacheadersSearch;
use app\controllers\MacheadersController;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
        'access' => [
        'class' => AccessControl::className(),
        'only' => ['logout'],
        'rules' => [
        [
        'actions' => ['logout'],
        'allow' => true,
        'roles' => ['@'],
        ],
        ],
        ],
        'verbs' => [
        'class' => VerbFilter::className(),
        'actions' => [
        'logout' => ['post'],
        ],
        ],
        ];
    }

    public function actions()
    {
        return [
        'error' => [
        'class' => 'yii\web\ErrorAction',
        ],
        'captcha' => [
        'class' => 'yii\captcha\CaptchaAction',
        'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
        ],
        ];
    }

    public function actionIndex()
    {
        
        $model = new Macheaders();
        
        $macheadersSearch = null;
        $dataProvider = null;
        $connection = Yii::$app->db; //get connection


        $auxTables = $connection->getTableSchema('macheaders')->columnNames; 
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
         
            return $this->render('/macheaders/consulta', [
                        'model' => $model,
                        'tables' => $tables,
                        'searchModel' => $macheadersSearch,
                        'dataProvider' => $dataProvider,
            ]);
            /*   if ($model->load(Yii::$app->request->post()) && $model->save()) {
              return $this->redirect(['view', 'id' => $model->packetId]); */
        } else {
            return $this->render('/macheaders/consulta', [
                        'model' => $model,
                        'tables' => $tables,
                        'searchModel' => $macheadersSearch,
                        'dataProvider' => $dataProvider,
            ]);
        }
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
            ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
            ]);
    }

    public function actionAbout()
    {
        return $this->render('about');
    }
}
