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

class ContentController extends Controller
{
	
	public function actionInternet()
	{
		
		return $this->render('internet');
	}
	
	
}