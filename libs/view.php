<?php
/**
 * Created by PhpStorm.
 * User: TUNG
 * Date: 22/01/15
 * Time: 10:32 PM
 */

class Libs_View {
    private $template = DEFAULT_TEMPLATE;
    public function __construct(){

    }

    public function render($name){
        $this->placeholder = $name;
        require 'application/'.MODULE.'/views/template/'.$this->template.'/content.php';
    }

    public function placeholder(){
        require 'application/'.MODULE.'/views/'.$this->placeholder.'.php';
    }

    public function view($name,$data = null){
        require 'application/'.MODULE.'/views/'.$name.'.php';
    }

    public function redirect($url = ''){
        ob_start();
        if($url != ''){
            $url = PATH.$url;
        }else{
            $url = PATH;
        }
        header("location: $url");
    }

}