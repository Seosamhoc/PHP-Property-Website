<?php
class FormMovie extends Zend_Form{
 
public function init(){
    
  $this->setMethod('post');
 $this->setAction('testing');
 
 $this->addElement('text', 'listing_id', array(
            'required'   => false,
            'validators' => array('digits'),
            'filters'    => array('StringTrim')
        )); 
 
 
 $this->addElement('text', 'price', array(
            'required'   => true,
            'validators' => array('digits'),
            'filters'    => array('StringTrim')
        ));      
 
 $allowWhiteSpace = true;
 $validator = new Zend_Validate_Alnum($allowWhiteSpace);
 

        
$street = new Zend_Form_Element_Text('street');
        $street->setRequired(true)
               ->addValidator($validator)
               ->addFilter('StringTrim');
        
        $this->addElement($street);
        
        
        $this->addElement('text', 'county_id', array(
            'required'   => true,
            'validators' => array('digits'),
            'filters'    => array('StringTrim')
        ));
  
        
        $this->addElement('text', 'housetype_id', array(
            'required'   => true,
            'validators' => array('digits'),
            'filters'    => array('StringTrim')
        ));
     
        $this->addElement('checkbox', 'sold', array(
//            'required'   => true,
            'validators' => array('digits')
        ));
        

        
        
        
//        $this->addElement('text', 'uploadedfile', array(
//            'required'   => true
//        ));
        

        // Add the submit button
        $this->addElement('submit', 'submit', array(
            'ignore'   => true,
            'label'    => 'List Property',
        ));
        
        
}
 
}
?>
