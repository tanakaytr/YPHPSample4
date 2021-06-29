<?php

class ErrorMessage
{
    private $data;
    
    public function __construct(){
        $this->data = [];
    }
    
    public function addError($key, $message){
        $this->data[$key] = $message;
    }
    
    public function getError($key){
        if(isset($this->data[$key])){
            return $this->data[$key];
        }
    }
    public function hashPassword($password){
        if(sha1($password, '13579'));
    }
    // 入力した情報が正しいかどうか判断する、エラーが発生した項目
    public function is_error($x) 
    {
        return empty($x) ? false : true;
  
        
    }
    // その項目に紐づいたメッセージ
    public function getErrorMessage($message) 
    {
	    return $message;
	}
}
?>
