<?php
/**
 * Created by PhpStorm.
 * User: TUNG
 * Date: 21/01/15
 * Time: 4:05 PM
 */

class Default_Controllers_About extends Libs_Controller{

    public function __construct(){
        parent::__construct();
    }
    public function index(){
//        echo "this is controller user action index";
        $data['ho'] = 'Nguyen!';
        $data['title']="Hello 123";
        $data['account']=array(
            "username" => "admin",
            "password" => "12345",
            "level"    => "2",
        );

//
//        $this->view->ho = $data['ho'];
//
//        $this->view->ten = "TUng";

//        $this->view->render('about/index');
        $this->view->view('about/index',$data);
    }

    public function about(){
        $this->view->render('about/index');
    }
}