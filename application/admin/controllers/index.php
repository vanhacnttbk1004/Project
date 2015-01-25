<?php
/**
 * Created by PhpStorm.
 * User: TUNG
 * Date: 21/01/15
 * Time: 4:05 PM
 */

class Admin_Controllers_Index extends Libs_Controller{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        echo "Hello";
        $this->view->render('index/index');
    }

} 