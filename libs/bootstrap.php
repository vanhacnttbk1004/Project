<?php
/**
 * Project: MVC Multi New
 * Created by TP Corporation.
 * Name: Tình Phong
 * Email: tinhphong007@gmail.com
 * Date: 16/06/2012
 * Time: 01:02
 */
class Libs_Bootstrap
{
    private $_module;
    private $_controller;
    private $_action;
    private $_param;
    public function __construct(){
//        if(SECRETS != 'WUrEhQadITU'){
//            exit;
//        }
        //echo 'Memory when start bootstrap is: ',$startMemory = memory_get_usage(),'<br>';
        $this->_parseRequest();
        //echo 'Memory of bootstrap file is ',memory_get_usage() - $startMemory,'<br>';
        $this->_delegate();
    }
    private function _parseRequest(){
        if(isset($_GET['url'])){
            $listRequest = explode('/',strtolower(rtrim($_GET['url'],'/\\')));
            if(is_dir('application'.DS.str_replace('-','',$listRequest[0]))){
                $this->_module = $listRequest[0];
                array_shift($listRequest);
            }else{
                $this->_module = DEFAULT_MODULE;
                $this->_controller = DEFAULT_CONTROLLER;
                $this->_action = DEFAULT_ACTION;
            }
            if(isset($listRequest[0])){
                $filepath = 'application'.DS.strtolower($this->_module).DS.'controllers'.DS.str_replace('-','',$listRequest[0]).EXT;
                if(file_exists($filepath)){
                    $this->_controller = str_replace('-','',$listRequest[0]);
                    array_shift($listRequest);
                }else{
                    $this->_controller = DEFAULT_CONTROLLER;
                    $this->_action = DEFAULT_ACTION;
                }
            }else{
                $this->_controller = DEFAULT_CONTROLLER;
                $this->_action = DEFAULT_ACTION;
            }
            if(isset($listRequest[0]) && !is_numeric($listRequest[0]) && Libs_Validator::isAlias($listRequest[0])){
                $class = ucfirst($this->_module).'_Controllers_'.ucfirst($this->_controller);
                if(method_exists($class,str_replace('-','',$listRequest[0]))){
                    $this->_action = str_replace('-','',$listRequest[0]);
                    array_shift($listRequest);
                }else{
                    $this->_action = DEFAULT_ACTION;
                }
            }else{
                $this->_action = DEFAULT_ACTION;
            }
            if(isset($listRequest[0])){
                $this->_param = $listRequest;
            }
        }else{
            $this->_module = DEFAULT_MODULE;
            $this->_controller = DEFAULT_CONTROLLER;
            $this->_action = DEFAULT_ACTION;
        }
    }
    private function _delegate(){
        define('MODULE',strtolower($this->_module));
        define('CONTROLLER',$this->_controller);
        define('ACTION',$this->_action);
        /*if($this->_module == DEFAULT_MODULE && $this->_controller == DEFAULT_CONTROLLER && $this->_action == DEFAULT_ACTION && count($this->_param) > 0){
            $controller = new Default_Controllers_Stores($this->_param[0]);
            array_shift($this->_param);
            if(isset($this->_param[0])){
                $action = str_replace('-','',$this->_param[0]);
                if(is_callable(array($controller,$action))){
                    $this->_action = $action;
                    array_shift($this->_param);
                }
            }
        }else{
            $class = ucfirst($this->_module).'_Controllers_'.ucfirst($this->_controller);
            $controller = new $class();
        }*/

        $class = ucfirst($this->_module).'_Controllers_'.ucfirst($this->_controller);
        $controller = new $class();
        $action = $this->_action;

        if(count($this->_param)>0){
            $controller->$action($this->_param);
        }else{
            $controller->$action();
        }
    }
}
/*
 * http://localhost:83/demo3/
 *
 * TH : Module default
 * TH1 : Controller Index / Action Index
 * => url : http://localhost:83/demo3/
 *
 * TH2 : Controller Index / Action User
 * => url :http://localhost:83/demo3/user
 * => url :http://localhost:83/demo3/index/user
 *
 * TH3 : Controller About / Action Index
 * => url : http://localhost:83/demo3/about
 * => url :http://localhost:83/demo3/about/index
 *
 * Th4 : Controller About/ Action
 * => url :http://localhost:83/demo3/about/about
 *
 * TH : Module Admin
 *
 * TH5 : Module Admin / Controller Index / Action Index
 * => url: http://localhost:83/demo3/admin/
 */
