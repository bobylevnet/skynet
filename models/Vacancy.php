<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vacancy".
 *
 * @property string $id
 * @property string $namevacancy
 * @property string $functionvacan
 * @property string $pay
 */
class Vacancy extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vacancy';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['namevacancy', 'functionvacan', 'pay'], 'required'],
            [['namevacancy', 'pay'], 'string', 'max' => 100],
            [['functionvacan'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'namevacancy' => 'Namevacancy',
            'functionvacan' => 'Functionvacan',
            'pay' => 'Pay',
        ];
    }
}
