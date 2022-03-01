<?php
/*
                                                        String Functions - AddSlashes

 AddSlashes : to add slash before :

single quote (')
double quote (")
backslash (\)
NULL

$str = "Who's Peter Griffin?";
echo $str . " This is not safe in a database query.<br>";
echo addslashes($str) . " This is safe in a database query.";

output:
Who's Peter Griffin? This is not safe in a database query.
Who\'s Peter Griffin? This is safe in a database query.
 
                                                     String Functions -  Stripslashes

 stripslashes : to remove the slashes
echo stripslashes("Who\'s Peter Griffin?");
 Who's Peter Griffin?

                                                        
                                               String Functions - AddSlashes, Strip_Tags
remove tags
syntax: strip_tags(string,allow) ///  allow : the tags that i want to leave it without removing

echo strip_tags("Hello <a href='moemen.com'<b><i>>world!</i></b></a>","<b><a>");
                  

                                               String Functions - StrToLower, StrToUpper

                   
                                   
$normalSting = "moemen saadeh";
echo $upper = strtoupper($normalSting)."<br>";

echo $upper= strtolower($upper);

                                         String Functions - lcfisrt, ucfisrt ,ucwords

     lcfirst(): lowercase first
     ucfirst(): uppercase first
     ucwords(); the first lettres of all words, it will be capital

$normalSting = "Moemen saadeh";
echo $lcf= lcfirst($normalSting)."<br>";
output : moemen saadeh

------------------------

$normalSting = "moemen saadeh";
echo $lcf= upfirst($normalSting)."<br>";

output : Moemen saadeh

----------------------

$normalSting = "Moemen saadeh";
echo $ucwords= ucwords($normalSting)."<br>";

output : Moemen Saadeh


                                                          String Functions - Trim

trim : trim from right and left
ltrim: trim from right only
rtrim: trim from left only

example 

$str =" i love php so much  ";
var_dump($str);
echo "<br>";
$trimmed = ltrim($str);
var_dump($trimmed);

output:
----------
string(21) " i love php so much "
string(20) "i love php so much "

*/

?> 
<?php
/*                                                   String Functions -Str_Word_Count
count number of words in a string

syntax : str_word_count(name of string, 0 or 1 or 2: by default its 0 , 1 and 2 do it as array , there are some tags and this function doesnt
count them like & and if we want to count it , we must to write iy here like this "&" )

$str= "my name is moemen saade";
$str = str_word_count($str);
echo $str;

output:   5
-------

                                                     String Functions - Nl2br, Parse_Str

parse_str("name=Peter&age=43");
echo $name."<br>";
echo $age;

ouptut:
------
Peter
43

---------------------
other example

parse_str("name=Peter&age=43",$myArray);
echo "<pre>";
print_r($myArray);
echo "</pre>";

output:
------
Array
(
    [name] => Peter
    [age] => 43
)


                                               String Functions - StrPos, StriPos, StrrPos


strpos : sensitive to lettres
stripos : insensitive // //
strrpos : sensitive : it will search from the right but position from left 


$str= "i love php so much because php is funny";
$position = strpos($str,"php");
echo $position;

output : 7
                                                String Functions - StrStr, StriStr, StrChr

strstr /StrChr : sensitive
strisrt : insensitive


                               
$str= "i love php so much because php is funny";
$char= strstr($str,"php",false); by default false
echo $char;

output:  php so much because php is funny
-------

--------------------------------

$str= "i love php so much because php is funny";
$char= strstr($str,"php",true); 
echo $char;
output:  php so much because php is funny
-------
i love

*/
?>
<?php

/*                                                 String Functions - Strcmp, StrnCmp, StrRev
$string1="phpphp";
$string2="php";
echo $two=Strcmp($string1,$string2);


output : 3

=>if the 2 variable is the same ,the result will be 0
=>if the variable ($string1) is greater than the over variable , the result will be positif and the sustraction of number between them
as example : 3
=>if the variable ($string2) is greater than the over variable , the result will be negatif and the sustraction of number between them
will be -3
--------------------

Strncmp(firstVariable,secondVariable,lenght)
$string1="phpphp";
$string2="php";
echo $two=Strncmp($string1,$string2,3);
from length 0 to 3 if the string is the same it will be 0

---------------------
strrev: reverse the string

$str= "moemen";
echo $reverse = strrev($str);

output:  nemeom
                                String Functions - SubStr

substr(name of string, length of start, length )

$str="i love php so much because its so beautifull";
echo $subs= substr($str,7);

output:  php so much because its so beautifull

-------------------
substr

$str="i love php so much because its so beautifull";
echo $subs= substr($str,7,18);  the second parametre starts from offset 7

output:  php so much becaus



                                                String Functions - Substr_[Compare, Count]


syntax : substr_count(name of string,"search",start,length)

$str="i love php so much because php so funny";

echo $count= substr_count($str,"php",10,26);

out : 1

                                                    String Functions - substr_compare
 syntax : substr_compare(first string,second string,start from the first string ,lenght of word that i
  want to compare it,sensitivity :true or false);



$string1="hello moemen";
$string2="moemen";

echo $string3= substr_compare($string1,$string2,6);

output: 0 

*/
?>
<?php
/*                                                 Control Structure - Include, Require

include information from page to another page

if we have a page "moemen.php" and in this page we have this code <?php       $string="moemen";        ?>
and we have another page "saadeh.php" and in this page we have <?php    echo $string;       echo"moemen";    ?>
if we want to echo this string from page to another page we must to include it like this

<?php    
include"moemen.php";
echo $string;    ?>

include_once/require_once : include this same page 2 time its error and we use include_once ( if this page included ,
don't include it , if didnt include
it before , include it)

require / include the same
but there a one difference between them : if the page doesnt exist include will give a warning and we can hide this warning by
code in php , and the remainder code in the page will work 

but if we use require , it will give a error ! and remainder code willnot work

                                             
                                          Control Structure - Switch


$browser = "google chrome";
switch($browser){
    case"firefox":
    case"mozilla firefox":
        echo"your favorite browser is firefox";
        break;

    case"chrome":
    case"google chrome":
        echo"your favorite browser is google chrome and this is the best";
        break;

    case"safari":
        echo"your favorite browser is safari";
        break;

    default:
        echo"your favorite browser isnt here";
}
                                                   File System - File_Exists, Is_Writable/dirname(__FILE__)


      directory of file           echo dirname(__FILE__);         dirname(__FILE__)=__DIR__ 
     output:       C:\xampp\htdocs\learn\moemen




$file= "love.txt";
if(file_exists($file)){
    echo " the file [". $file ."] is found";
    file_put_contents($file,"i love you so much");
}
else{
    echo "  sorry the file [". $file ."] isnt found but i created it with php"; 
    file_put_contents($file,"I LOVE YOU");
}  

!!file_exists : to search if the file found
file_put_contents: to write information to file <but> file name if isnt exist it will create a file with the same name of file
that i didnt find it and write the information

-----------------------------

$file= "love.txt";
if(is_writable($file)){
    echo " the file [". $file ."] is found and it is writable";
}
else{
    echo " sorry the file [". $file ."] isnt found but it isnt writable"; 
    file_put_contents($file,"I LOVE YOU");
}  
output:
-------
sorry the file [love.txt] isnt found but it isnt writable
Warning: file_put_contents(love.txt): failed to open stream: Permission denied in C:\xampp\htdocs\learn\moemen\el zero3.php on line 326
!! in love.txt file properties we maked it read only


                                                 File System - MkDir, RmDir, Is_Dir 
           

 mkdir:  will create a folder
 -------
$name="osama";
mkdir($name);
 


 rmdir: will remove a created folder
 -------
$name="osama";
rmdir($name);
           and jif we refresh the page other time we will get this warning
           Warning: rmdir(osama): No such file or directory in C:\xampp\htdocs\learn\moemen\el zero3.php on line 349

-----------------------------

$name='love';
if(is_dir($name)){
    rmdir($name);
    echo "the directory is removed succesufly";
}else{
    echo "there is no directory with this name ". $name ;
}
*/ 

?>
<?php
//echo dirname(__FILE__); // dirname(__FILE__,2); will take us 2 step to behind
/*
include"text.php"; only false
include"inc/text.php"; true

------------------------




advanced example:
--------
echo dirname(__FILE__) ;C:\xampp\htdocs\learn\moemen
echo dirname(__FILE__, 2);  output:  C:\xampp\htdocs\learn


echo basename(__FILE__); name of file that i am working on it;

output :el zero3.php
-------

                                                           File System - Simple Training 1



chmod :change mode "read , write in file";
0444 : only for read
0755 :read and write

if(file_exists(__DIR__."/php")){
   echo 'sorry this directory is exists';
}
else{
    mkdir(__DIR__.'/php');
}
$directory= __DIR__.'/php/';
file_put_contents($directory."saadeh.txt","hello");
$file= $directory."saadeh.txt";
chmod($file,0444);
if(is_writable($file)){

    file_put_contents($file,"hello");
}
else{
     chmod($file,0755);
     file_put_contents($file,"testing");
}

                                               
                                              File System - File Put Contents

 file_put_contents(file,content,mode,context);
 file_put_contents : if file exist and empty it will write in it
                     if isnt exist it will create it then write in it
                     if file exist and fill, it will remove the ancient writings then write in it

mode : FILE_APPEND , if i want to add something into file without removing ancient writing , we must to use it
mode : LOCK_EX     , 




                                             File System - File Get Contents

syntax echo file_get_contents(file name,include_path,context,offset, max length)
echo file_get_contents('names.txt',false,null,6);



                                             File System - Rename, Copy

copy : it will make a copy to the contents of the first file in another file " automatically it will create the second file"
copy("names.txt","bibo.txt");

    example:
    ---------
     
  if(!copy("names.txt","bibo.txt")){
           echo "sorry file not copied";
       }
         else{
    "file has been copied";
      }


rename(oldname,newname,context)
 
 rename("names.txt","newtext");
  other example: // rename ancient file and move it to another location
  ------------
 rename("newtext",__DIR__."\uploads\moemen.txt"); 



 */


?> 

