<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $phone;
    public $tarifs;
    public $verifyCode;
    public $message;
    public $id;


    /**
     * @return array the validation rules.
     */
    
    const SCENARIO_TARIF="tarif";
    const SCENARIO_SUPPORT ="support";
    const SCENARIO_REQUEST="request";
    
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'phone', 'tarifs'], 'required', 'message'=>'Это поле обязательно для заполнения', 'on'=>self::SCENARIO_TARIF],
        	[['name', 'email', 'phone', 'message'], 'required', 'message'=>'Это поле обязательно для заполнения', 'on'=>self::SCENARIO_REQUEST],
        	[['name', 'email', 'phone', 'message'], 'required', 'message'=>'Это поле обязательно для заполнения', 'on'=>self::SCENARIO_SUPPORT],
        	['phone','match','pattern'=>'/^\+7\d{10}$/','message'=>'Телефон в формате +79227777777'],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
        	'name' => 'Ваше имя',
        	'email' => 'Электронная почта',
        	'tarifs' => 'Тариф',
        	'phone' => 'Телефон  в формате +79227777777',
            'verifyCode' => 'Введите код на картинке',
        	'message' => "Опишите свою проблему",
        ];
    }
    
    
    function scenarios()
    {
    	$scenarios = parent::scenarios();
    	$scenarios[self::SCENARIO_TARIF] = ['name', 'email', 'tarifs','phone','verifyCode'];
    	$scenarios[self::SCENARIO_SUPPORT]= ['name', 'email','phone','message','verifyCode'];
    	$scenarios[self::SCENARIO_REQUEST]= ['name', 'email','phone','message','verifyCode'];
    	return $scenarios;
    }
    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    public function contact($email)
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setFrom(Yii::$app->params['adminEmail'])
                ->setTo('connect@skynet89.ru')
                ->setSubject('Заявка на подключение')
                ->setTextBody($this->phone .'  '. $this->tarifs)
                ->send();

            return true;
        }
        return false;
    }
}
