<?php
function uploadFiles($product_id) {
	//echo UPLOAD_PATH;
        //echo $product_id;
	//echo $_FILES['uploadedfile']['tmp_name'];
    $imageUpload = UPLOAD_PATH . $_FILES['uploadedfile']['name'];
    
        if($_FILES["uploadedfile"]["name"]!=null){
//added condition so that if user decides not to change image it doesn't delete previous image
            
            if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $imageUpload)) {
		
		saveImageRecord($product_id, basename( $_FILES['uploadedfile']['name']));
		
	
            } else{
		echo "<p>There was an error uploading the file, please try again!</p>";
	}
        }
	
	
}

function saveImageRecord($product_id, $imageName) {
	$dbListingsTable = new Zend_Db_Table('listings');
        $where = $dbListingsTable->getAdapter()->quoteInto('listing_id = ?', $product_id);
	$listing_id = $dbListingsTable->update(array('imagefile' => $imageName), $where);	
}


function deleteMovie($id) {
    $dbListingsTable = new Zend_Db_Table('listings');
    $where = $dbListingsTable->getAdapter()->quoteInto('listing_id = ?', $id);
    $delete = $dbListingsTable->delete($where);
    //echo "deleting";
    header('Location: /propertyWebsite/index.php?action=listmovies');
}

?>
