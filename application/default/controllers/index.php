<?php
/**
 * Created by PhpStorm.
 * User: TUNG
 * Date: 21/01/15
 * Time: 4:05 PM
 */

class Default_Controllers_Index extends Libs_Controller{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
//        echo "this is controller index action index";
        $this->view->render('index/index');
    }
    public function user(){
//        echo "this is controller user action index";
//        $this->view->bien_gi_do = "Gia tri"
//        $mode = new Models_Helper();
        $this->view->message = "aaa";
        $this->view->render('index/user');

    }


} 