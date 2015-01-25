<?php
/**
 * Created by PhpStorm.
 * User: TUNG
 * Date: 22/01/15
 * Time: 10:31 PM
 */

class Libs_Model extends Libs_Database{
    public function __construct(){
        $this->db = new Libs_Database();
    }
}