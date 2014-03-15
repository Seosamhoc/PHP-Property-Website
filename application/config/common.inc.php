<?php

set_include_path(APPLICATION_PATH . "/vendor/Smarty/libs" . PATH_SEPARATOR . get_include_path());
set_include_path(APPLICATION_PATH . "/vendor" . PATH_SEPARATOR . get_include_path());
set_include_path(APPLICATION_PATH . "/forms" . PATH_SEPARATOR . get_include_path());
define("UPLOAD_PATH",  realpath(dirname(dirname(dirname(__FILE__)))) . "/uploads/");
define("IMAGE_PATH", "/propertyWebsite/uploads/"); //if changed must also be changed in my.js
       

       require_once('Zend/Loader.php');
       Zend_Loader::loadClass('Zend_Db_Table');
       Zend_Loader::loadClass('Zend_Registry');
       Zend_Loader::loadClass('Zend_Form');
       Zend_Loader::loadClass('Zend_View');
       Zend_Loader::loadClass('Zend_Form_Element');
       Zend_Loader::loadClass('Zend_Validate_Alnum');
       
       $db = Zend_Db::factory('Pdo_Mysql', array('host'=>'localhost','username'=>'root','password'=>'root','dbname'=>'properties'));
       
       Zend_Db_Table::setDefaultAdapter($db);
       
       
       
?>
