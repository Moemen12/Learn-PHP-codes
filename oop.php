<?php
  
  
  class AppleDevice{
  
  public $ram = '1GB'; // All properties here will be default properties
  public $space = '6GB'; 
  public $inch = '3.3 inch';
  public $color = 'blue';
  public $OwnerName ;
  
 // Constants
  const name = 5;

  
 /*
    Method :
    
    public function setOwnerName(){
    if(strlen($this->OwnerName)<3){
    echo 'Owner name can\'t be less then 3 chars';
    }else{
    echo 'Your name has been set';
    }
     
  } */
  
    public function setOwnerName($owner){
    if(strlen($owner)<self::name){
    echo 'Owner name can\'t be less then '. . chars';
   }else{
    echo 'Your name has been set';
}
      
  }
  
  }
   
  $iphone6plus = new AppleDevice();
  $iphone6plus->ram ='2GB';
  $iphone6plus->space ='32GB';
  $iphone6plus->inch ='5 inch';
  $iphone6plus->color ='gold';  
  $iphone6plus->setOwnerName('gren');
 /* 
  $iphone6plus->OwnerName ='ofs';  
  $iphone6plus->setOwnerName();    
  
  for running the second method
 --------------------------------
  $iphone6plus->setOwnerName('moemen');

  */
  
  
      
   echo '<pre>';
   var_dump($iphone6plus);
   echo '</pre>';
  
  
   $iphone7plus = new AppleDevice();
   
  $iphone7plus->ram ='4GB';
  $iphone7plus->space ='124GB';
  $iphone7plus->inch ='7 inch';
  $iphone7plus->color ='red'; 
  echo '<pre>';
  var_dump($iphone7plus);
  echo '</pre>';
  
  $iphone = new AppleDevice();
  echo '<pre>';
  var_dump($iphone);
  echo '</pre>';
  
  
  
  
  
  
  
  
  
  
  
  
?>
