<?php
session_start();

// Define path to application directory
defined('APPLICATION_PATH')
    || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/application'));

require_once(APPLICATION_PATH . '/config/common.inc.php');
require_once('FormLogin.php');

//echo "I am the login form;";

if (!empty($_POST)){
    //echo print_r($_POST);

$form = new FormLogin();

if ($form -> isValid($_POST)) {
    
    $validValues = $form->getValues();
    //print_r($validValues);
    //echo "form is valid";
   //Take the values and check againstthe database
   $dbLoginTable = new Zend_Db_Table('adminusers');
   $username = $form->getValue('username');
   $password = $form->getValue('password');
   $rows = $dbLoginTable->fetchAll("username = '$username' and password = '$password'");
   
   if(sizeof($rows) == 1) {
       //echo "user found";
       $_SESSION['loggedIn']=1;
       $_SESSION['user']=$rows[0];
       header("location: index.php");
   }
   
}//end of checking if valid
else {
echo "Not valid";
}
}
else {
     
     header("Location: index.php");
     
 }

?>
