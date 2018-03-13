<?phpnamespace  app\components;
use yii\filters\AccessControl;use yii\filters\VerbFilter;
class  bahivController extends \yii\web\Controller{
public function behaviors()
{
	return [
			'access' => [
					'class' =>    AccessControl::className(),
					'only' => ['create', 'update' , 'delete'],
					'rules' => [
							[
									'actions' => ['index','create', 'update' , 'delete'],
									'allow' => true,
									'roles' => ['@'],
							],
					],
			],
			'verbs' => [
					'class' => VerbFilter::className(),
					'actions' => [
							'delete' => ['POST'],
					],
			],
	];
}}