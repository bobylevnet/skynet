<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Menu;
use yii\web\Session;
use app\models\User;
use yii\helpers\Url;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */

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
                    'logout' => ['get'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
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

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
    	Yii::$app->session['menuselect']= 'activemenu1';
    	$model = new LoginForm();
    	
    	if ($model->load(Yii::$app->request->post()) && $model->login()) {
    		return $this->redirect('tarifs/index');
    	}
        return $this->render('index');
    }

    
    
    public function actionAbout()
    {
    	return $this->render('about');
    }
    
    
    public function actionAdres()
    {
    	return $this->render('adres');
    }
    

    public function actionLicense()
    {
    	return $this->render('license');
    }
    
    
    public function actionVideo()
    {
    	return $this->render('video');
    }
    
    public function actionInternet()
    {
    	
    	$model = new ContactForm(['scenario'=>ContactForm::SCENARIO_REQUEST]);
    	
    	 
    	if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
    		Yii::$app->session->setFlash('contactFormSubmitted');
    		 
    		return $this->refresh();
    	}
    	return $this->render('internet', ['model'=>$model]);
    }
    
    //физические лица 
    public function actionPhysycal()
    {
    	Yii::$app->session['menuselect'] = 'activemenu1';
    	return $this->render('index');
    }
    
    public function actionBusiness()
    {
    
       Yii::$app->session['menuselect'] = 'activemenu2';
    	return $this->render('business');
    }
    

    public function actionCabinet()
    {
    
    	Yii::$app->session['menuselect'] = 'activemenu3';
    	return $this->render('cabinet');
    }
    
    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
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

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return string
     */
    public function actionContact($scenario=null)
    {
        $model = new ContactForm(['scenario'=>ContactForm::SCENARIO_TARIF]);
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            
            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model, 'id'=>Yii::$app->request->get('id'),
        ]);
    }
    
    
    public function actionSupport()
    {
    	$model = new ContactForm(['scenario'=>'support']);
    
    	if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
    		Yii::$app->session->setFlash('contactFormSubmitted');
    		
    		return $this->refresh();
    	}
    	return $this->render('support', [
    			'model' => $model,
    	]);
    }
    

    
    


    public function actionCanal()
    {
    	
    	return $this->render('canal');
    	 
    }
    
    public function actionRequest()
    {
    	$model = new ContactForm(['scenario'=>ContactForm::SCENARIO_REQUEST]);
    
    	
    	if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
    		Yii::$app->session->setFlash('contactFormSubmitted');
    	
    		return $this->refresh();
    	}
    	return $this->render('request',['model'=>$model]);
    }    
    
    
    
    public function actionSeti()
    {
    	return $this->render('seti');
    	
    }
    
    
    
    
    public function actionCareers()
    {
    	
    	return $this->render('careers');
    	
    }
    
    
    

    /**
     * Displays about page.
     *
     * @return string
     */

}
