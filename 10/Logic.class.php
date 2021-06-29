<?php
class Logic{
    public $data;
    public $request;
    public $session;
    public $view;
    public $auth;
    public $validation;
    public $error_message;
    
    function __construct(){}
    
    function execute($action){
        $this->session->start();
        $this->getSessionParameters();
        
        if(!$this->is_authenticated() && $action != "auth"){
            $action = "login";
            $this->request->setAction("login");
        }
        
        switch($action){
            case "login":
            case "top":
            case "about":
            case "links":
                break;
            case "logout":
                $this->session->close();
                $this->request->setAction("login");
                break;
            case "auth";                                // エラーメッセージ処理を追加する
                $this->getPostParameters();
                $this->setDataToSession();
                $this->validation->validation();
                $this->errormessage->is_error();
                $this->errormessage->getErrorMessage();
                
                if($this->authenticate()){
                    $this->request->setAction("top");
                }
                else {
                    $this->request->setAction("login");
                }
                $error_message = [];
                if(! Validation::evalidation($this->data->getId())){
                    $this->error_message->addError("id", "必須項目です。");
                }
                if(! Validation::evalidation($this->data->getPassword())){
                    $this->error_message->addError("password", "必須項目です。");
                } else if(! Validation::nvalidation($this->data->getPassword())){
                    $this->error_message->addError("password", "数値を入力してください。");
                }
                // IDとパスワードが間違っています
                if(hashPassword($id)){
                    
                }
                break;
            default:
                $action = "error";
                $this->request->setAction("error");
                break;
        }
        $this->view->setBaseTemplate("work15-base-template.php");
        $this->view->render($this->data);
    }
    function getSessionParameters(){
        $vars = array_keys(get_object_vars($this->data));
        foreach($vars as $var){
            $this->data->$var = $this->session->getParameter($var);
        }
    }
    function getPostParameters(){
        $vars = array_keys(get_object_vars($this->data));
        foreach($vars as $var){
            $this->data->$var = $this->request->getParameter($var);
        }
    }
    function setDataToSession(){
        $vars = array_keys(get_object_vars($this->data));
        foreach($vars as $var){
            $this->session->setParameter($var, $this->data->$var);
        }
    }
    function is_authenticated(){
        if($this->data->is_authenticated){
            return true;
        }
        return false;
    }
    function authenticate(){
        if($this->auth->authenticate($this->data->id, $this->data->password)){
            $this->data->is_authenticated=true;
            $this->session->setParameter("is_authenticated", true);
            return true;
        }
        return false;
    }
    function setData($data){
        $this->data = $data;
    }
    function setRequest($request){
        $this->request = $request;
    }
    function setSession($session){
        $this->session = $session;
    }
    function setView($view){
        $this->view = $view;
    }
    function setAuth($auth){
        $this->auth = $auth;
    }
    function setValidation($validation){
        $this->validation = $validation;
    }
    function setErrorMessage($error_message){
        $this->error_message = $error_message;
    }
}
?>
