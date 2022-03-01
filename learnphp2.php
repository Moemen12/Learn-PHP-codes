<?php
/*                                                       Array Methods - Sort Indexed Array

    sort : ranking from a to z and from 0 to ...
    rsort: ranking from z to a and from ... to 0
      !!!sort and rsort specifique for index array only



    $elements= array("html","css","html5","java");
    echo"<pre>";
   print_r($elements);
   echo"</pre>";
   sort($elements);
   echo"<pre>";
   print_r($elements);
   echo"</pre>";

   
                                                        Array Methods - Sort Associative Array

    asort : ranking(value) from a to z and from 0 to ...
    arsort: ranking from z to a and from ... to 0
      !!!sort and rsort specifique for index array only


      ksort : ranking(key of Associative Array) from a to z and from 0 to ...
      krsort: ranking(key of Associative Array) from z to a and from ... to 0




  $elements= array(
                "html"=>54,
                "css"=> 70,
                "html5"=>45,
                "java"=>33,
                "php"=>93,
            );

            echo"<pre>";
            print_r($elements);
            echo"</pre>";

    asort($elements);
    echo"<pre>";
    print_r($elements);
    echo"</pre>";


                                                Array Methods - Shuffle, Reverse
                 
                                                
array_reverse(where,true or false) : by default its false 
false : all elements in array it will be reverse with changing the key number ;
true : all elements in array it will be reverse wihtout changing the key number ( every number will stay to own element)

Shuffle(where): all elements in array it will be reverse but randomly where you do refresh to page, and all key will stay fix, from 0 to ...


$elements= array("html","css","html5","java");
    echo"<pre>";
   print_r($elements);
   echo"</pre>";
   $reverse= array_reverse($elements);
   echo"<pre>";
   print_r($reverse);
   echo"</pre>";


                                                     Array Methods - Array Fill
 array_fill(index,how much,value);


$array=array_fill(2,10,"moemen");
echo "<pre>";
  print_r ($array);
echo "</pre>";


OUTPUT
------
Array
(
    [2] => moemen
    [3] => moemen
    [4] => moemen
    [5] => moemen
    [6] => moemen
    [7] => moemen
    [8] => moemen
    [9] => moemen
    [10] => moemen
    [11] => moemen
)



$array=array_fill(2,10,array("moemen","ali","abed"));
echo "<pre>";
  print_r ($array);
echo "</pre>";


*/

?>
<?php
/*                                                         Array Methods - Array Sum

it works with all type of array !!!

$array= array(3,100,34,45,43);
$sum =array_sum($array);
echo $sum;

output 225



it will ignore anything other number and do the sum to numbers only
$array= array(3,"A",32,"moemen",23);
$sum =array_sum($array);
echo $sum;

output 55



                                                         Array Methods - Array Rand
array_rand(name of array,number); 

$array=array("moemen","ali","abed");
$rand= array_rand($array,3);        

 
here there 3 sentence and in number of syntax 3 
echo $array[$rand[0]] ."<br>";
echo $array[$rand[1]] ."<br>";
echo $array[$rand[2]] ."<br>";





                                                           Array Methods - Array Unique

$array=array("moemen","ali","abed","moemen","khaled","abed");
echo "<pre>";
  print_r ($array);
echo "</pre>";

$unique= array_unique($array);
echo "<pre>";
  print_r ($unique);
echo "</pre>";

output
------
before
------
Array
(
    [0] => moemen
    [1] => ali
    [2] => abed
    [3] => moemen
    [4] => khaled
    [5] => abed
)



after
-----
Array
(
    [0] => moemen
    [1] => ali
    [2] => abed
    [4] => khaled
)






                                                         String Functions - Explode : string to array

syntax("from where you want to cut the array",array name, limit)
               limit its optional ,  


$str= "Hello i love php to much";
echo $str ."<br>";
$arr= explode(" ",$str);

echo "<pre>";
  print_r ($arr);
echo "</pre>";


in this case

$str= "Hello i love php to much";
echo $str ."<br>";
$arr= explode(" ",$str,3);

echo "<pre>";
  print_r ($arr);
echo "</pre>";

output:
------
Hello i love php to much
Array
(
    [0] => Hello
    [1] => i
    [2] => love php to much
)

  ---------------------------------------------

  in limit 0 and 1 its the same 

$str= "Hello i love php to much";
echo $str ."<br>";
$arr= explode(" ",$str,-2);

echo "<pre>";
  print_r ($arr);
echo "</pre>";


output:
------
Hello i love php to much
Array
(
    [0] => Hello
    [1] => i
    [2] => love
    [3] => php
)


                                        String Functions - Implode/join: array to string


$str= array("moemen","ali","khaled","yousof");
$implode = implode(" & " ,$str);         => the first parametre is to separate between elements of function (optional)

or $implode = join(" & " ,$str);

echo "Hello our moderators names is ". $implode ;




                                        String Functions - Str_Split, Chunk_Split
                                   
syntax: str_split(name of string,length) => lenght by default its 1

$str ="Hello i love php";
$splite= str_split($str,2);
echo"<pre>";
print_r ($splite);
echo"</pre>";

output:
------
Array
(
    [0] => He
    [1] => ll
    [2] => o 
    [3] => i 
    [4] => lo
    [5] => ve
    [6] =>  p
    [7] => hp
)


--------------------


syntax: Chunk_Split(name of string,length,end) => lenght by default its 76 , end by default its \r or \n

$str= "HelloIlovephp";
$chunk = chunk_split($str,4," @ ");
echo $chunk;

output
------
Hell @ oIlo @ veph @ p @

*/
?>
<?php
   
/*                                                      String Functions - Str_Replace


syntax: str_replace("word that i want to change to it","what is the word that i want to be",name of string,how much it replaced);
                             all nessecary                                                               => but tihs optional
  
$str="I love php so much because php its a good lang and php is famous";
$replace =str_replace("php","javascript",$str,$i);
echo $replace."<br>";
echo $i;


advanced example
-----------------
$str="I love php so much because php its a good lang and php is famous";
echo $str."<br>";
$str = explode(" ",$str);
echo "<pre>";
 print_r ($str);
echo "</pre>";

$replace =str_replace("php","javascript",$str);
echo "<pre>";
print_r($replace);
echo "</pre>";

$implode=implode(" ",$replace);
echo $implode;



other example 1:
----------
if i want to replace many word in string

$str="I love|php@so$much|because@php|its@a=good=lang@and|php=is|famous";
$str= str_replace(array("=","@","|")," ",$str);
echo $str;

output
--------
I love php so much because php its a good lang and php is famous


other example 2:
----------
if i want to replace many word in string

$str="I love|php@so$much|because@php|its@a=good=lang@and|php=is|famous";
$str= str_replace(array("=","@","|"),array(" a "," b "," c "),$str);
echo $str;

output
--------
 I love c php b so much|because b php|its b a a good a lang b and c php a  is c famous

*/


?>
<?php
    /*    
                                   String Functions - Str_[Repeat, Shuffle], StrLen  
    str_repeat()

    it will repeat moemen 20 time

  $str ="moemen <br>";
  $str= str_repeat($str,20);
  echo $str;

-----------------------------

str_shuffle()

it will mix the lettres randomly when i refresh

 $str ="moemen saade";
  $shuffle= str_shuffle($str);
  echo $shuffle;

-------------------------------

strlen()

 $str ="moemen";
  $shuffle= strlen($str);
  echo $shuffle;

  !! index starts from 0
  !! length starts from 1
   
  output
  ------
  6

*/

?>