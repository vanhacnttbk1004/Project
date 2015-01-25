<?php
/**
 * Created by PhpStorm.
 * User: TUNG
 * Date: 23/01/15
 * Time: 11:39 PM
 */

class Models_Helper extends Libs_Model{
    public function __construct(){
        parent::__construct();
    }
    public function getAllProduct(){
        $this->db->connect();
        $listProduct = $this->db->executeQuery("");
        $this->db->disconnect();
        return $listProduct;
    }
    public function getDetailProductByUrl($proUrl){
        $this->db->connect();
        $listProduct = $this->db->executeQuery("SELECT * FROM products WHERE pro_url = '$proUrl'");
        $this->db->disconnect();
        return $listProduct;
    }
}