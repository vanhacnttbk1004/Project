<?php
/**
 * Created by PhpStorm.
 * User: TUNG
 * Date: 21/01/15
 * Time: 4:56 PM
 */

class Libs_Validator{

    public static function isEmail($email){

    }
    // Chi chua chu va so va dau - .
    public static function isAlias($strAlias){
        if(preg_match("/^[a-zA-Z0-9][a-zA-Z0-9-.]*[a-zA-Z0-9.]+$/",$strAlias)){
            return true;
        }return false;
    }
}