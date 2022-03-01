
<!--
LAMP= LINUX Apache Mysql PHP
XAMPP=ALL OS Apache, Mysql ,PHP ,PERL
WAMP= windows Apache, Mysql ,PHP
MAMP= MAC Apache, Mysql ,PHP
*/

                                     /* print a word/sentence..
echo "I LOVE PHP";
-->
<?php
                                     /* concatenation
$name="moemen";
$age=32;
*/
?>
<!--
<!DOCTYPE html>
<html>
<head> <title>moemen saadeh</title></head>
<body>
<?php // echo $name ." ".$age ;?>


</body>
</html>
-->
<?php
/*  
$var1 ="I LOVE PHP";                              data type string
echo "<h2>Get Type</h2>";
echo gettype($var1);
echo "<h2>variable dump</h2>";
echo var_dump($var1);

$var2=100;                                    data type integer
echo "<h2>Get Type</h2>";
echo gettype($var2);
echo "<h2>variable dump</h2>";
echo var_dump($var2);

$var3=true;                                    data type boolean
echo "<h2>Get Type</h2>";
echo gettype($var3);
echo "<h2>variable dump</h2>";
echo var_dump($var3);

$var4=10.5;                                       data type float/double
echo "<h2>Get Type</h2>";
echo gettype($var4);
echo "<h2>variable dump</h2>";
echo var_dump($var4);


$var5= array(                                    data type array
    "A"=>"val1",
    "B"=>"val2",
    "C"=>"val3",
);
echo "<h2>Get Type</h2>";
echo gettype($var5);
echo "<h2>variable dump</h2>";
echo var_dump($var5);

$var6=null;                                        data type null
echo "<h2>Get Type</h2>";
echo gettype($var6);
echo "<h2>variable dump</h2>";
echo var_dump($var6);



class book{                                        data type object
    function book(){
  $this->genre="Adventure";
}
}
$var7= new book();
echo "<h2>Get Type</h2>";
echo gettype($var7);
echo "<h2>variable dump</h2>";
echo var_dump($var7);



$var8=fopen('names.txt','r');                      data type resource
echo "<h2>Get Type</h2>";
echo gettype($var8);
echo "<h2>variable dump</h2>";
echo var_dump($var8);
*/
?>
                                           
<?php
    /*                                                  constant

  Constants  after define it, you cant change its value; and its global scoop , i can call it from anywhere of page
     syntax : define("name of variable ","value of varible", status of lettres)   status of lettres: true/false   : sensitivity of lettres
    
     define("FIRST_NAME","moemen",optionel)  3thr parameter false by default
     echo $FIRST_NAME;                                     i cant use $first_name   
*/







/*
$num1=50;                                                   if/else
$num2=50;
if($num1>$num2){
 echo $num1. " is larger than ". $num2;
}
else if($num1==$num2){
    echo $num1. " is equal to ". $num2;

}
else{
    echo $num1." isnt larger than ". $num2;
}




$var=100;                                                   information for me
$var +=200;
echo $var;               //output 300


$name="moemen ";
$name .= "saadeh";          //output moemen saadeh
 


$var=10;
echo     ++$var   //output  11           ++$var : here ++ first  => direktly it will increase 1 then it will print it


$var=10;
echo $var++   ; //ouput 10               $var++ : here ++ second => first it will print the same number



&& 
xor 1 condition is true but not all



$file=     fopen("ali.txt","r");      //output : failed to open stream : no such file or directory in c :......
how can hid the error;    just add @ operator before 
$file=     @fopen("ali.txt","r");  nothing will appear ,the error wil ignore
!!!! and if i want to write my custom error , i can like this
$file=     @fopen("ali.txt","r")or die("this file is not found"); 


*/


  /* for($i=1; $i<=20;$i++)   {
       echo $i ."<br>";


   }                                      
*/   
?>
<!--
 <select name="year">
 <?php
 /*
      for($year=1900;$year<= 2015;$year++){
           echo "<option value=$year>".$year ."</option>";
      }
      */
 ?>
 </select>

    -->
    <?php
    /*
    $lang= array("html","css","java","ajax","python","ruby");
     echo"<ul>";

    for($i=1;$i<6;$i++){
       echo "<li>". $lang[$i] ."</li>";
    }
     echo"</ul>";
*/






/*                                                  for loop
the fisrt methode

for($i=1; $i<=20;$i++)   {
    echo $i ."<br>";


} 



the second methode

for($i=1;;$i++){
  if($i>20){
      break;
  }
  echo $i."<br>";
}




the third metode 
$i=1;
for( ; ;$i++){
    if($i>20){
        break;
    }
    echo $i . "<br>";
}



the fourth methode
$i=1;
for(;;){
    if($i>20){
        break;
    }
    echo $i."<br>";
    $i++;
}




                                                               while loop
first methode

$i=1;                                      
while($i<=20){
    echo $i++ ."<br>";
}


second methode
$i=1;                                      
while($i<=20):
    echo $i++ ."<br>";
endwhile;


                                                      array

$countries=array("misir","bahrain","lebanon","saudia","turkey","amerika");
 foreach($countries as $value){
     echo $value ."<br>";
 }



$countries=array(
    "eg"=>"misir",
    "bah"=>"bahrain",
    "leb"=>"lebanon",
    "sau"=>"saudia",
    "tur"=>"turkey",
    "ame"=>"amerika");

    foreach($countries as $key=> $value){
        echo $key."=>". $value ."<br>";
    }
   
                                                 function



function hellosay(){
    echo"hello php";
}
hellosay();




function count1to3(){
    for($i=1;$i<=30;$i++){
        echo $i."<br>";
    }
}
count1to3();


    


function sayhello($name){                                          function with 1 argument
    echo "hello " . $name;
}
sayhello("moemen");




function sayhello($name,$age){                                         function with 2 argument
    echo "hello " . $name . "and my age is ". $age;
}
sayhello("moemen","18");

*/
?>

<?php
/*
                                                                   indexed array

$languages = array("html","css","js","python","ruby","php","arduino");
echo "<ul>";
  for($lang=0;$lang<count($languages);$lang++){
      echo "<li>". $languages[$lang] ."</li>";
  }
echo"</ul>";
*/
/*                           


                                                    array associative


  $key => value
* key must be unique : i cant use the same key but i can use the same value



$languages = array(
   "html"=>"55%",
   "css" =>"95%",
   "js"  =>"45%",
   "python" =>"25%",
   "ruby" =>"33%",
   "php" =>"56%",
   "arduino" =>"100%"); 

   $languages["MySql"]= "30%";

     echo "<ul>";
   foreach($languages as $lang =>$progress){
          echo "<li>". $lang ."=>". $progress ."</li>";
   }
     echo"</ul>";


*/

?>
<?php
/*                                                 array methode search
array_key_exists(index number, where)
array_search()
in_array()

$array = array("html","css","js","python","ruby");

if(in_array("html",$array)){      syntax:  in_array("what are we searching about","where",true or false)
    echo "yes it exists";       by default the third option is false and if we put it true, it will search about type of variable
                                  like 10 and "10" ///// it doesnt exist in this status
}




                                               Array Methods - Add Items , how to add element to an array

                !   array_push : add elements to the end of array
                !   array_Unshift: add elements to the fist of array


$array = array("html","css","js","python","ruby");
array_push($array,"Mysql");
print_r($array);


$array = array("html","css","js","python","ruby");
array_Unshift($array,"Mysql");
echo "<pre>";
print_r($array);
echo "</pre>";






                                              Array Methods - Remove Items ,how to remove element to an array

                !   array_pop : remove elements from the end of array
                !   array_shift: remove elements from the fist of array




$array = array("html","css","js","python","ruby");
print_r($array);
echo "<pre>";
print_r($array);
echo "</pre>";

$lastlang = array_pop($array);
echo "<pre>";
print_r($array);
echo "</pre>";

echo $lastlang;


*/

?>







