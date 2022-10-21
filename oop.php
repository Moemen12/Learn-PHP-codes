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
 
 /------------------------------------------------------------------
 
 
 <?php
   
   class Iphone {
       public $name;
       public $ram;
       public function __construct($na,$ra){
           $this->name=$na;
           $this->ram=$ra;
           echo "Hello " . $na . "Your device has " . $ra ." Ram";
       }
   }
   
   
   class Sony extends Iphone{
       
   }
   
   $phone = new Iphone("Amani",4);

   
?>

<?php
   
   class Iphone {
       public $name;
       public $ram;
       
       
       public function __call($method,$params){
           echo "The ". $method . " is not found \n";
           print_r($params);
       }
 
   }
   
   
   $phone= new Iphone();
$phone->WelcomeToApp("Moemen","2GB");

   
?>

 /------------------------------------------------------------------
 
 <?php
   
   class Iphone {
       public $name;
       private $ram;
       
       /*
       public function __get($prop){
          echo "The Property ". $prop . " is not found";
       }
       */
        public function __set($prop,$val){
          echo "The Property ". $prop . " is not found";
          echo "And You cant assigne this value " .$val ." to it";
       }
   }
   
   
   $phone= new Iphone();
   $phone->ram = "4GB";

   <?php
   
   class Iphone {
       public $name;
       public $email;
       public function __construct($n,$e){
           $this->name= $n;
          $this->email= $e;
       }
       
   }
   
   
   $main= new Iphone("Moemen","moemensaadeh3@gmail.com");
   $copy = clone $main;
   $main->name="ali";
   $copy->name="khaled";
    
    echo "<pre>";
   print_r($main);
   echo "</pre>";

   
      echo "<pre>";
   print_r($copy);
   echo "</pre>";

?>
 /------------------------------------------------------------------
 <?php
  class Iphone{
      public static $name = "osama";
      public static $ram = "4GB";
      
      public static function sayHello(){
          return "Hello";
      }
  }
  
  
  echo Iphone::$name;
  echo Iphone::$ram;
  echo Iphone::sayHello();
?>



<?php
  class Iphone{
      public $name;
      public $ram ;
      
      public function pressPower(){
          echo "You have pressed the power button";
          return $this;
      }
       public function bootPhone(){
          echo "The Phone is booting now";
          return $this;
      }
       public function sayWelcome(){
          echo "Welcome to Phone";
          return $this;
      }
  }
  
  
 $phone = new Iphone();
  $phone->pressPower()->bootPhone()->sayWelcome();
 echo "<pre>";
 print_r($phone);
 echo "</pre>";
 
?>
 /------------------------------------------------------------------
 <?php

 trait fingerPrint{
     
     public function fingerFeature(){
         echo "This is finger print feature\n";
         return $this;
     }
 }

 trait ThreeDimensionsTouch{
     
     public function threeD(){
         echo "This is 3D touch feature\n";
         return $this;
     }
 }

 trait FaceDectect{
     
     public function faceFeature(){
         echo "This is face detect feature\n";
         return $this;
     }
 }
 
 
 trait AllFeatures{
    use fingerPrint,ThreeDimensionsTouch,FaceDectect;
 }

 
 
 
 

  class Iphone{
     use AllFeatures;
     function sayHello(){
         echo "Hello from IPhone";
         return $this;
     }
  }
  
  
  
    class Sony{
  use FaceDectect;
     
     function sayHello(){
         echo "Hello from Sony";
     }
  }
  
   class Nokia{
    function sayHello(){
         echo "Hello from Nokia";
     }
  }
  
  
  
 $phone = new Iphone();
 $phone->fingerFeature()->threeD()->faceFeature()->sayHello();
 echo "<pre>";
 print_r($phone);
 echo "</pre>";
 
 
 
 $sony = new Sony();
 echo "<pre>";
 print_r($sony);
 echo "</pre>";
 $sony->faceFeature()->sayHello();
 
 
 $nokia = new Nokia();
 echo "<pre>";
 print_r($nokia);
 echo "</pre>";
 $nokia->sayHello();
?>

 /------------------------------------------------------------------
 
 <?php
trait MyFeature{
      public function sayHello(){
        echo "Hello from trait";
    }
}


class AppleDevice{
    public function sayHello(){
        echo "Hello from class";
    }
}
  
  class Iphone extends AppleDevice{
      use MyFeature;
  }
  
 $phone = new Iphone();
 $phone->sayHello();
 echo "<pre>";
 print_r($phone);
 echo "</pre>";
 
 
 
?>

 /------------------------------------------------------------------
 
 <?php
trait MyFeature1{
      public function feature(){
        echo "This is feature no 1";
    }
}

trait MyFeature2{
      public function feature(){
        echo "This is feature no 2";
    }
}

  
  class Iphone {
      use MyFeature1,MyFeature2{
          MyFeature2::feature as MoemenFeat;
          MyFeature1::feature insteadof MyFeature2;
      }
  }
  
 $phone = new Iphone();
 $phone->feature();
 $phone->MoemenFeat();
 echo "<pre>";
 print_r($phone);
 echo "</pre>";
 
 
 
 /------------------------------------------------------------------
?>

 
?>
  
 
  
?>
  
 
  
?>
