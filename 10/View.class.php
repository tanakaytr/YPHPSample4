<?php
class View
{
    public $base_template_filename;
    public $content;
    public $error_message;
    
    function __construct(){}
    
    function setBaseTemplate($filename){
        $this->base_template_filename = $filename;
    }
    
    function render($data){
        ob_start();
        ob_implicit_flush(0);
        require_once($this->base_template_filename);
        $error_message = Controller::$error_message;
        $content = ob_get_clean();
        $this->content = $content;
    }
    function show(){
        print $this->content;
        print $this->error_message;
    }
}
