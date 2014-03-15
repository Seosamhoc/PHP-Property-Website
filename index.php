<?php
session_start();
    // Define path to application directory
    defined('APPLICATION_PATH')
    || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/application'));

//die(APPLICATION_PATH);
//error_reporting(E_ALL);
require_once(APPLICATION_PATH . '/config/common.inc.php');
include (APPLICATION_PATH . "/functions.inc.php");       
         
   

    //die(get_include_path());
set_include_path(APPLICATION_PATH. "/models" . PATH_SEPARATOR . get_include_path());


include_once('smartymovies.inc.php');

$smarty = new Smarty_Movies();


$smarty->assign('name','Property App by Seosamh');
$smarty->assign('showJumboTron',true);

$smarty->assign('loggedIn',false);
$loggedIn= false;
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']==1){
    
     $smarty->assign('loggedIn',true);  
     $loggedIn=true;
}

$pageAction = isset($_GET['action']) ? $_GET['action'] : 'home';
    //die($pageAction);
switch ($pageAction) {
    
    case 'createmovies':
        if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == 1) {
            //die("loading here $pageAction");
            $dbTable = new Zend_Db_Table('listings');
            $dbHouseTable = new Zend_Db_Table('houses');
            $dbCountyTable = new Zend_Db_Table('counties');

            $rows = $dbTable->fetchAll();
            $houserows = $dbHouseTable->fetchAll();
            $countyrows = $dbCountyTable->fetchAll();

            if(isset($_GET['alertmessage'])){ 
                $smarty->assign('alertmessage', $_GET['alertmessage']);
            }

            $smarty->assign('row1', $rows);
            $smarty->assign('countyrows',$countyrows);
            $smarty->assign('houserows',$houserows);
            $smarty->assign('page','page1.tpl');
            $smarty->assign('pageTitle','Add Listing');}
        else{
            header("Location: index.php");
        }

   break;

    case 'listmovies':
        if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == 1) {
        //die("loading here $pageAction");
        $dbTable = new Zend_Db_Table('listings');
        $dbHouseTable = new Zend_Db_Table('houses');
        $dbCountyTable = new Zend_Db_Table('counties');
        
        
        $rows = $dbTable->fetchAll();
        $houserows = $dbHouseTable->fetchAll();
        $countyrows = $dbCountyTable->fetchAll();
        
        
        
        foreach($rows as $row1){
            if($row1['sold']==0){
                $row1['sold']="Not Sold";
            }
            else {
                $row1['sold']="SOLD";
            }
            
            foreach($houserows as $houserow){
                if($row1['housetype_id']==$houserow['housetype_id']){
                    $row1['housetype_id']=$houserow['housetype'];
                }
            }
            
            foreach($countyrows as $countyrow){
                if($row1['county_id']==$countyrow['county_id']){
                    $row1['county_id']=$countyrow['county'];
                }
            }
        }
        $smarty->assign('imagepath',IMAGE_PATH);
        $smarty->assign('rows', $rows);
        $smarty->assign('houserows',$houserows);
        $smarty->assign('countyrows',$countyrows);
        $smarty->assign('page','listmovies.tpl');
        $smarty->assign('pageTitle','Property Listings');}
        else{
            header("Location: index.php");
        }
         
   
    break;

    case 'edit':
        if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == 1) {
        $record_id = $_GET['id'];
        $dbTable = new Zend_Db_Table('listings');
        $row = $dbTable->fetchRow('listing_id = '. $record_id);
                
        $dbTable = new Zend_Db_Table('counties');
        $countyrows = $dbTable->fetchAll();
        
        $dbHouseTable = new Zend_Db_Table('houses');
        $houserows = $dbHouseTable->fetchAll();
        
        $smarty->assign('imagepath',IMAGE_PATH);
        $smarty->assign('countyrows',$countyrows);
        $smarty->assign('houserows',$houserows);
        if(isset($_GET['alertmessage'])){ 
            $smarty->assign('alertmessage', $_GET['alertmessage']);
        }
        
        $smarty->assign('row',$row);    
        $smarty->assign('page','editmovie.tpl');
        $smarty->assign('pageTitle','Edit Listing');
        }
        else{
            header("Location: index.php");
        }
        
        break;
    case 'delete':
        if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == 1) {
        $record_id = $_GET['id'];
        deleteMovie($record_id);
        $smarty->assign('page','front.tpl');
        $pageAction='listmovies';
        
        }
        else{
            header("Location: index.php");
        }
        
        break;
    default:
    //die('loading here')
    $dbCountyTable = new Zend_Db_Table('counties'); 
    $dbHouseTable = new Zend_Db_Table('houses');
    
    
    $countyrows = $dbCountyTable->fetchAll();
    $houserows = $dbHouseTable->fetchAll();
    
    $smarty->assign('houserows',$houserows);
    $smarty->assign('countyrows',$countyrows);
    $smarty->assign('imagepath',IMAGE_PATH);
    $smarty->assign('showJumboTron',true);
    $smarty->assign('page','front.tpl');
    $smarty->assign('pageTitle','Property Listings Home Page');

}
$smarty->display('master.tpl', $pageAction);

?>