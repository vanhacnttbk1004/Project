<?php
    include_once 'config/config.php';


    function __autoLoad($class){
        //Libs_Bootstrap
        // Libs/Bootstrap.php
        //libs/bootstrap.php
        $file = strtolower(str_replace('_',DS,$class.EXT));
        if(file_exists('application'.DS.$file)){
            include_once 'application'.DS.$file;
        }else if(file_exists($file)){
            include_once "$file";
        }else{
            echo 'File' .$file,'Not exits';
        }

    }

new Libs_Bootstrap();