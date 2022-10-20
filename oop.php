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
  
  
  
  /------------------------------------------------------------------
  
  
  <?php
  
  
  class AppleDevice{
  
  public $ram = '1GB'; // All properties here will be default properties
  public $space = '6GB'; 
  public $inch = '3.3 inch';
  public $color = 'blue';
  private $lock;
  
 // Method
 public function ChangeSpec($ra,$in,$sp,$co){
     $this->ram= $ra;
     $this->inch=$in;
     $this->space=$sp;
     $this->color=$co;
 }
  
  public function changeLock($lo){
      $this->lock = sha1($lo) ;
  }
  }

  
  $iphone6plus = new AppleDevice();
  $iphone6plus->ChangeSpec('4GB','7inch','32GB','gold');
  $iphone6plus->changeLock('moemren123');
   
   echo '<pre>';
   var_dump($iphone6plus);
   echo '</pre>';
  
 // echo $iphone6plus->lock;  
 // Cannot access private property AppleDevice::$lock
  
   $iphone7plus = new AppleDevice();
$iphone7plus->ChangeSpec('16GB','37inch','64GB','white');


  echo '<pre>';
  var_dump($iphone7plus);
  echo '</pre>';
  
  $iphone = new AppleDevice();
  echo '<pre>';
  var_dump($iphone);
  echo '</pre>';
    
  /------------------------------------------------------------------
  
  
   
  <?php
  
  
  class AppleDevice{
  
  public $ram = '1GB'; // All properties here will be default properties
  public $space = '6GB'; 
  public $inch = '3.3 inch';
  public $color = 'blue';
  public $name;

  
 // Method
 public function ChangeSpec($ra,$in,$sp,$co){
     $this->ram= $ra;
     $this->inch=$in;
     $this->space=$sp;
     $this->color=$co;
 }
  
 
  public function sayHello($n){
   $this->name= $n;
   echo "Welcome to " . $n;
  }
  }
  
  
  
  class Sony extends AppleDevice{
      public $screen = 'LCD';
    public function sayHello($n){
   $this->name= $n;
   echo "Welcome " . $n;
  }
  }

  
  $iphone6plus = new AppleDevice();
  $iphone6plus->ChangeSpec('4GB','7inch','32GB','gold');
 $iphone6plus->sayHello("IPhone");
 $iphone6plus->price="300$";

   echo '<pre>';
   print_r($iphone6plus);
   echo '</pre>';
 
   $sony = new Sony();
  $sony->ChangeSpec('90GB','7inch','32GB','gold');
 $sony->sayHello("Sony");
   echo '<pre>';
   print_r($sony);
   echo '</pre>';
 
 
  /------------------------------------------------------------------
 
 <?php
  
  abstract class MakeDevice{
      abstract public function TestPerfomance();
      abstract public function verifyOwner();
      abstract public function sayWelcome($n);
  }
  
  class Iphone extends MakeDevice {
   public $owner;
   public function TestPerfomance(){
       echo "Performance is Good 100%";
   }
     public function verifyOwner(){
       echo "Owner is verified";
   }
     public function sayWelcome($s){
        $this->owner=$s;
       echo "Welcome " . $s;
   }
   
  }

  class Ipad extends MakeDevice {
       public $owner;
      public function TestPerfomance(){
       echo "Performance is Good 100%";
   }
     public function verifyOwner(){
       echo "Owner is verified";
   }
     public function sayWelcome($y){
        $this->owner=$y;
       echo "Welcome " . $y;
   }
  }

  
  $iphone = new Iphone();
  $iphone->sayWelcome("Moemen");
   echo '<pre>';
   print_r($iphone);
   echo '</pre>';
 
   $ipad = new Ipad();
   $ipad->sayWelcome("Ahmad");
   echo '<pre>';
   print_r($ipad);
   echo '</pre>';
 

 
 ?>
 
   /------------------------------------------------------------------
    
    <?php
 
 interface DBConnects{
        public function getUsers();
        public function getArticles();
        public function showStats();
 }
 
 class MySql implements DBConnects {
    public function getUsers(){
      echo"SELECT * FROM USERS";
    }
    public function getArticles(){
             echo"SELECT * FROM ARTICLES"; 
        }
  public function showStats(){
             echo"SELECT * FROM STATS"; 
        }
 }
 
 class Oracle  implements DBConnects{
         public function getUsers(){
      echo"Hello FROM USERS";
    }
    public function getArticles(){
     echo"Hello FROM ARTICLES"; 
        }
  public function showStats(){
     echo"Hello FROM STATS"; 
        }
 }
 
 
 $row = new Oracle();
 $row->getUsers();
 $row->getArticles();
 $row->showStats();
 echo "<pre>";
 print_r($row);
 echo "</pre>";
 

 
 
?>
  
  
  
  
  
  
  
  
?>
  
  
  
  
 
  
  
  
?>
