<?php
/**
 * Created by PhpStorm.
 * User: TUNG
 * Date: 23/01/15
 * Time: 11:41 PM
 */

class Libs_Database {
    private $__connection;
    protected $_result;

    public function connect(){
        $conn = $this->__connection = mysql_connect(DB_HOST,DB_USER,DB_PASS) or die("No Connect Server!");
        mysql_select_db(DB_DATA,$conn) or die("No select database!");
        mysql_query("SET NAMES utf8");
    }

    public function query($sql){
        if($this->__connection){
            $this->_result = mysql_query($sql);
            return $this;
        }
    }

    public function fetchAll(){
        while($row[] = mysql_fetch_array($this->_result));
        return $row;
    }

    public function execute($sql){
        return mysql_query($sql);
    }

    public function executeQuery($sql){
        $listResult = new ArrayObject();
        $result = mysql_query($sql);
        if(mysql_num_rows($result)){
            while($row = mysql_fetch_object($result)){
                $listResult->append($row);
            }
        }
        return $listResult;
    }



    public function disconnect(){
        return mysql_close($this->__connection);
    }
} 