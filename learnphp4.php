<?php
/*
                                                 File System - Unlink + Examples

unlink(remove file)


$file ="love.txt";
if(is_writable($file) && file_exists($file)){
    unlink($file);
}else{

if(file_exists($file)){

  echo "sorry this file isnt writable , i will change the permission now pleasd refresh the page";
  chmod($file,0755);
  }
}
                                                             File System - Scandir
         
           scandir(dir,sort,context) 
           sort:    SCANDIR_SORT_DESCENDING : from z to A
                    SCANDIR_SORT_NONE : the same sort of file in computer  
                    SCANDIR_SORT_ASCENDING : from A to z              

$link= __DIR__."/php";
$files= scandir($link);
echo"<pre>";
print_r ($files);
echo"</pre>";

output:
------
Array
(
    [0] => .
    [1] => ..
    [2] => 122.txt
    [3] => 3554.txt
    [4] => aaa.txt
    [5] => love.bmp
    [6] => saadeh.txt
    [7] => zoro.rtf
)

-----------------

$link= __DIR__."/php";
$files= scandir($link,SCANDIR_SORT_ASCENDING);
echo"<pre>";
print_r ($files);
echo"</pre>";

foreach($files as $file){

    if(is_file($link."/".$file)){
        unlink($link."/".$file);
    }
}

only folder we will stay because we used unlink = file only will remove
output:
------
Array
(
    [0] => .
    [1] => ..
    [2] => ali
    [3] => moemen
)


                                       File System - Fopen

fopen : handling to file
fopen(filename,mode,include_path,context)                             

mode:
-----
r: read only start from the beginning of the file (file must be exist);
r+: read and write start from the beginning of the file (file must be exist);
w: write only (create the file if not exist);  /// if there are contents in file it will remove and from starting it will start
W+: write and read (create the file if not exist); /// if there are contents in file it will remove and from starting it will start
a: write only (create the file if not exist);/// if there are contents in file it will leave it and 
write after them
a+: write and read  (create the file if not exist);///if there are contents in file it will leave it and 
write after them
x: write only, (create the file if not exist);/// if the file is exist , it will give a warning or give an error
Warning: fopen(moemen.txt): failed to open stream: File exists in C:\xampp\htdocs\learn\moemen\el zero4.php on line 91
x+: write and read ,(create the file if not exist); /// if the file is exist , it will give a warning or give an error
Warning: fopen(moemen.txt): failed to open stream: File exists in C:\xampp\htdocs\learn\moemen\el zero4.php on line 91


                                                 File System - Fread
fread(handle(file that i maked it with fopen),length)

$filehandle= fopen("love.txt","r");
$filereading= fread($filehandle,filesize("love.txt"));
echo $filereading;


                                                 File System - Fwrite

fwrite(handle,string(text that i want to write, length))

$filehandle= fopen("love.txt","r+");
$wite= fwrite($filehandle,"a");

os1ma will be as1ma 
            
                                                  File System - Fseek ,fclose

      fseek(handle ,offset,whence" by default SEEK_SET); 
      whence : SEEK_SET ,SEEK_CUR ,SEEK_END : it start from end to beginning



$filehandle= fopen("love.txt","r+");
fseek($filehandle,3,SEEK_SET);
$write= fwrite($filehandle,"m");
fseek($filehandle,5,SEEK_CUR);    // it starts from current length ,and we start with 1 ,isnt from 0
$write= fwrite($filehandle,"a");

!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
finally we must to close fopen with fclose  fclose(filehandle)


                                                    Predefined Variables - Globals

            call variable from anywhere
                                             
             $name ="moemen";
             $GLOBALS['age'] ="saadeh";
function testFunc(){

    echo $GLOBALS['name'];
    echo $GLOBALS['age'];
}
testFunc();
                                         

*/
?>
<!-- <form action="control.php" method="POST">
<input type ="text" name ="username"><br><br>
<input type ="password" name="password"><br><br>
<input type= "submit" value="login">
</form>

-->
<?php
/*                                      Predefined Variables - GET/POST/request 


if($_SERVER['REQUEST_METHOD'] =='POST'){
    $admins= array("moemen","khaled","ali");
$username= $_POST['username'];
    if(in_array($username,$admins)){
            
        echo "hello".$username. "welcome to control panel for admins ";
    }
    else{
        echo "sorry this name is nt exist in our client area";
    
    }
}else{
    echo"sorry you cant browse this page directly";
}

-------------------------------------------------------


if($_SERVER['REQUEST_METHOD']== "POST"){
 echo $_REQUEST['username'];
}
else{
    echo "you cant browse this page directly";
}

*/
?>
<!--
<form action="< //?php echo $_SERVER['PHP_SELF'] ; ?>" method="POST">
<input type="text" name="username" />
<input type="submit" name="Send" />
</form>
-->
<?php
/*                                Cookies - Cookies - Set Cookie + Examples

!! cookies it must before html code
 cookies : storage your information on you local server without any database
 syntax :setcookie(name,value,expire,path,domain,secure,httponly)

$maincolor= "#FFF";
if($_SERVER['REQUEST_METHOD']== 'POST'){
    $maincolor=  $_POST['color'];
    setcookie("background",$maincolor,time()+3600,'/');
}
if(isset($_COOKIE['background'])){
    $body = $_COOKIE['background'];
}
else{

$body =$maincolor;
}
*/
?>
<!--
<!DOCTYPE html>
<html>
  <head>
      <title>Modify cookie</title>
  </head>
  <body style="background-color:<// ?php echo $body; ?>">
      <form action="<// ?php echo $_SERVER['PHP_SELF']   ?>" method="POST">
   <input type="color" name="color">
   <input type="submit" value="choose">
     </form>
  </body>
</html>
             
other example
-------------

if($_SERVER['REQUEST_METHOD'] =='POST'){
    $admins= array("moemen","khaled","ali");
$username= $_POST['username'];
    if(in_array($username,$admins)){
            
        echo "hello".$username. "welcome to control panel for admins ";
    }
    else{
        echo "sorry this name is nt exist in our client area";
    
    }
}else{
    echo"sorry you cant browse this page directly";
}


-----------------------------------------------------------
-->

<?php
  /*                         
                                               - Session - Start | Resume Session
 !! session it must before html code
A session is a way to store information (in variables) to be used across multiple pages.

Unlike a cookie, the information is not stored on the users computer.


session_start();
$_SESSION['username']="moemen";
$_SESSION['food']="pizza";

in the second file 
session_start();  // for resuming the opened session
echo $_SESSION['username'];

                                                Session - End | Destroy Session

session_start();

only we must write them to end session
session_unset();

session_destroy();
                                                
                                               Misc Functions - Sleep, uSleep + Examples
  sleep(second) delay
  usleep(micro_second)delay
  time_sleep_until() delay


                                                Misc Functions - Exit, Die + Examples


    exit/die are the same
  The exit() function prints a message and exits the current script.
  
  $file ="lolla.txt";
  $handle =fopen($file,"r") or die("unable to find $file");
  echo "moemen saadeh";   //this code willnt work because there is die fonction 

  output: if we found the file name :
     moemen saadeh


   output: if we didnt find the file name :  
    unable to find $file



                                              Misc Functions - Uniqid + Examples

     Syntax
            uniqid(prefix,more_entropy)   
prefix:Optional. Specifies a prefix to the unique ID (useful if two scripts generate ids at exactly the same microsecond)
more_entropy:Optional. by default it 13 characters (false) but it we put it (true) it will be 23 characters

<?php
echo uniqid();
?>

output par example : 74H89DT54HS

                                            Filter - Filter_Var Advanced

filter_var(variable,type of filter,option)


                                             Date - Date Intro

date_default_timezone_set()

date_default_timezone_set('Europe/Istanbul');
echo date('Y-m-d');

-------------------

Syntax
date(format, timestamp)
Format a local date and time and return the formatted date strings:
example

    date_default_timezone_set('Europe/Istanbul');
    $nextweek= time()+ (7*24*60*60);
    echo date('Y-m-d h:i:s' , $nextweek);


*/



























?>

