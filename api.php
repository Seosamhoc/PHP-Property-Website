<?php
// Define path to application directory
defined('APPLICATION_PATH')
    || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/application'));

//die(APPLICATION_PATH);
//error_reporting(E_ALL);
require_once(APPLICATION_PATH . '/config/common.inc.php');
       
    //die(get_include_path());
set_include_path(APPLICATION_PATH. "/models" . PATH_SEPARATOR . get_include_path());
        
     $dbTable = new Zend_Db_Table('listings');
     
     $select = $dbTable->select()->setIntegrityCheck(false)
             ->from(array('t1'=>'listings'),array('listing_id','price','address','sold','imagefile','dateuploaded'))
             ->join(array('t2'=>'counties'),'t1.county_id=t2.county_id', 't2.county as county')
             ->join(array('t3'=>'houses'),'t1.housetype_id=t3.housetype_id','t3.housetype as housetype');
     
    
    
    if (isset($_REQUEST['listing_id'])) {
      
        $select->where('t1.listing_id = ?', (int) $_REQUEST['listing_id']);
        
  }
  
  if (isset($_REQUEST['county'])) {
      
        $select->where('t2.county = ?', $_REQUEST['county']);
        
  }
  
  if (isset($_REQUEST['price'])) {
      
        $select->where('t1.price = ?', (int) $_REQUEST['price']);
        
  }
  
  if (isset($_REQUEST['housetype'])) {
      
        $select->where('t3.housetype = ?', $_REQUEST['housetype']);
        
  }
  
  $rows = $dbTable->fetchAll($select);
  
  
  $listOfMovies = array();
  foreach($rows as $row) {
      $listOfMovies[] = $row->toArray();

  }

   /* Set the header type for output */  
      
       header('Content-Type: application/json');  
      
    /* Create a variable to hold your JSON data */  
      
        $jsonOutput =  json_encode($listOfMovies);  
      
    /* Output the JSON data */  
      
        echo $jsonOutput;


?>