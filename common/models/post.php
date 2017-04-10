<?php
 
namespace common\models;
 
use Yii; 
 
class post extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'users';
    }
 
    public function rules()
    {
        return [
            [['title', 'content', 'author', ], 'required'],
            [['title', 'content', 'author'], 'string', 'max' => 100]
        ];
    }
    public function getListPost()
    {
        $query = new \yii\db\Query();
        $query->select('*')
                ->from(self::tableName());
        return $query->createCommand()->queryAll();
    }

}