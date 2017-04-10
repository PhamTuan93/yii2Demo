<?php
namespace app\models;
use yii\base\Model;
class Hello extends Model{
    
    public $username;
    public $email;
    
    public function setUser($user, $email){
        $this->username = $user;
        $this->email = $email;
    }
    
    public  function getUser(){
        return $this->username.'<br/>'. $this->email;
    }
}

?>