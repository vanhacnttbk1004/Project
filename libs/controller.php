<?php
/**
 * Created by PhpStorm.
 * User: TUNG
 * Date: 22/01/15
 * Time: 10:31 PM
 */

class Libs_Controller{
    public $view;
    public function __construct(){
//        echo "Main controller";
        $this->view = new Libs_View();
    }


}