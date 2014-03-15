<?php
// Define path to application directory
defined('APPLICATION_PATH')
    || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/application'));

require_once(APPLICATION_PATH . '/config/common.inc.php');
include (APPLICATION_PATH . "/functions.inc.php");
require_once('FormMovie.php');



if (!empty($_POST)){

$form = new FormMovie();

if ($form -> isValid($_POST)) {
    
    $validValues = $form->getValues();
    
   $dbListingsTable = new Zend_Db_Table('listings');
    if ($_POST['listing_id'] == 0) {
  
       $listing_id = $dbListingsTable->insert(array(
          'listing_id' => NULL,
          'price' => $validValues['price'],
          'address' => $validValues['street'],
          'county_id' => $validValues['county_id'],
          'housetype_id' => $validValues['housetype_id'],
          'sold' => $validValues['sold'],
//          'imagefile' => $validValues['uploadedfile']
      ));
 
    
      //print "<p>Record is $listing_id";
       uploadFiles($listing_id);
      if(!headers_sent()){
          header('Location: /propertyWebsite/index.php?action=listmovies');}
   
   
    
       }//end insert
    else {
        $where = $dbListingsTable->getAdapter()->quoteInto('listing_id = ?', $_POST['listing_id']);
//        echo "</br> where: " . $where . "</br>";
        $listing_id = $dbListingsTable->update(array(
          'address' => $validValues['street'],
          'county_id' => $validValues['county_id'],
          'housetype_id' => $validValues['housetype_id'],
          'sold' => $validValues['sold'],
//          'imagefile' => $validValues['uploadedfile'],
          'dateuploaded' => NULL
         ), $where);
        
       
       uploadFiles($_POST['listing_id']);
       header('Location: /propertyWebsite/index.php?action=listmovies');
    }//end editing a movie


}//end of checking if valid
else 
{
    if (!empty($_POST["listing_id"]))
    {  
        if ($_POST['listing_id'] == 0) 
        {
            header('Location: /propertyWebsite/index.php?action=createmovies');
        }
        else
        {
            $alertmessage = "Error editing listing, try again.";
            header('Location: /propertyWebsite/index.php?action=edit&id=' . $_POST['listing_id'] . "&alertmessage=".urlencode($alertmessage));
        }
    }
    else
    {
        $alertmessage = "Error creating listing, try again.";
        header('Location: /propertyWebsite/index.php?action=createmovies' . "&alertmessage=".urlencode($alertmessage));
    }
}
}
else
{
    header('Location: /propertyWebsite/index.php?');
}

?>
