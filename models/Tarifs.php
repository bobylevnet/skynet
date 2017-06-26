<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;
use yii\db\Expression;


/**
 * This is the model class for table "tarifs".
 *
 * @property string $id
 * @property string $nametarif
 * @property string $speedtarif
 * @property string $pricetarif
 * @property string $typetarif

 */
class Tarifs extends \yii\db\ActiveRecord
{
    /**	
     * @inheritdoc
     */
	
	public $namepricetarif;
	public $comment;

	
    public static function tableName()
    {
        return 'tarifs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nametarif', 'speedtarif', 'pricetarif', 'typetarif'], 'required'],
        	[['namepricetarif','comment'], 'safe'],
            [['nametarif', 'speedtarif', 'pricetarif'], 'string'],
            [['typetarif','technology'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nametarif' => 'Nametarif',
            'speedtarif' => 'Speedtarif',
            'pricetarif' => 'Pricetarif',
            'typetarif' => 'Typetarif',
        	'technology' => 'Technology',
        	'comment'=>'Comment'
        	 
        ];
    }
    
    public static function getAcsElement(&$item, $key)
    {
    	//if ($key == 'namepricetarif')
    	//{
    		
    	$item = $item['namepricetarif'];
    
    	//}
    	
    }
    public   function getTarifs()
    {
    
    	
    	$r = Tarifs::find()->select(['id, CONCAT(nametarif,	 " ", pricetarif, " ", comment) as namepricetarif'])->all();
    	$data =  ArrayHelper::toArray($r,[
    			'app\models\Tarifs' => [
    					 'id',
    					'namepricetarif',
    			]
    	]);
    	$data = ArrayHelper::index($data, 'id');
    	array_walk($data,'self::getAcsElement');
    	return $data;
    	
    	
    }
    
    
    public function getDetailTarifs($id)
    {
    	
    	
    	$detail = Tarifs::find()->where('id='.$id)->select(['detail'])->one();
    	
    	$arr = explode('.', $detail->attributes['detail']);
    	$detailr = '';
    	
    	foreach ($arr as $key=>$value){
    		
    		$detailr = $detailr . '<p>';
    		$detailr = $detailr . $value;
    		$detailr = $detailr . '.</p>';
    	}
    	
    	
    	return $detailr;
    }
    
    
}
