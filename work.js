/*
                                                   New Way To Create Variable - Let


     function varTest(){
    var x=1;
    if(true){
          var x=2;
          console.log(x);
    }
 
    console.log(x);
    return "Done";
}

console.log(varTest());                                             

output:
--------
2
2
Done

-----------------

function letTest(){
    let x=1;
    if(true){
          let x=2;
          console.log(x);
    }
 
    console.log(x);
    return "Done";
}

console.log(letTest());

output:
--------
2
1
Done


-------------------

var x=1;
var x=2;
console.log(x);    output:2

let x=1;
let x=2;
console.log(x);   error has been declared

-------------------

let x=1;
 x=2;
console.log(x);   output:2


var x=1;
 x=2;
console.log(x);  output:2


                                                                 New Way To Create Variable - Const


const SETTINGS=1;
if(true){
    const SETTINGS=2;
    console.log(SETTINGS);   
}
console.log(SETTINGS);

output:
--------
2
1

----------------------


const SETTINGS=[];
SETTINGS.push("html","css","Js");
console.log(SETTINGS);

output:
--------
['html', 'css', 'Js']

-----------------------

const SETTINGS={
    'name':"osama",
    'age':36,
}
console.log(SETTINGS);  

output:
-------
{name: 'osama', age: 36}

we can change proprerity but we cant add new thing example:
SETTINGS.name="ali";
output:
-------
{name: 'ali', age: 36}

--------------------------

const SETTINGS={
    'name':"osama",
    'age':36,
};

const SETTINGS={
    'color':'red',
};
console.log(SETTINGS);   output:  Identifier 'SETTINGS' has already been declared

!!! if we want to prevent changing proprerity in object we can use =>     Object.freeze(objectNameHere);
 
example:
-------
const SETTINGS={
    'name':"osama",
    'age':36,
};
console.log(SETTINGS.name);
Object.freeze(SETTINGS);      osama

SETTINGS.name="ali";
console.log(SETTINGS.name);   osama


                                                             Arrow Function - Syntax and Examples

function test(){
    return 2;
}
console.log(test());      output:2
-----------------------------

let test = function(){
    return 2;
}
console.log(test());     output:2

----------------------------------

let regularTest1 = function(){
    return 2;
}
console.log(regularTest1());   output:2

// with no parameters
let arrowTest1 = ()=> 2;    
let arrowTest2 = _=> 2;

console.log(arrowTest2());     output:2

-----------------------------------

// with one parametre

let regularTest2 = function(param){
    return param*2;
}
console.log(regularTest2(3));  output: 6


let regularTest2 =  param=>param*2;
console.log(regularTest2(4));  output: 8 
 -------------------------------------

 // with multiple parametre

 let regularTest2 = function(param1,param2){
    return param1 * param2;
}
console.log(regularTest2(5,6)); output: 30



 let regularTest2 = (param1,param2)=> param1* param2;
console.log(regularTest2(5,6));  output: 30



                                                                  Arrow Function And This Value


let test= function(){

  document.getElementById("show").innerHTML=this;
  
}
//window object called the function
window.onload = test;

//Button object called the function

document.getElementById("button").addEventListener("click",test);

-----------------------------------
in arrow function

let test= ()=>document.getElementById("show").innerHTML=this;
//window object called the function
window.onload = test;                   !!!  only this will work

//Button object called the function

document.getElementById("button").addEventListener("click",test); willnt work because if this in arrow function it work there only

-----------------------------------------

avdanced example:

function Person(){
    let that=this;
    this.age=0;
    setInterval(function(){

      that.age++;
      console.log(that.age);

    },5000);

}

let user = new Person();

output:
------
1
2
3
....


--------------------------------

in arrow function

function Person(){
    this.age=0;
    setInterval(()=>{

      this.age++;
      console.log(this.age);

    },5000);

}
let user = new Person();

                                                                  Template Literals


let oldWay= "Hello moemen i love you \n so much";
console.log(oldWay);



let NewWay=
`Hello moemen
 i love you
 so much`;

console.log(NewWay);


                                                                 Spread Operator



let array1=[1,2,3],
array2=[4,5,6];

console.log(array1.concat(array2));  [1, 2, 3, 4, 5, 6]
let allArrays=[...array1,...array2];
console.log(allArrays);   [1, 2, 3, 4, 5, 6]

function sum(x,y,z){
    return x+y+z;
}
console.log(sum(3,3,3));   9 


const myNumber=[1,2,3]
console.log(myNumber);  [1, 2, 3]
console.log(...myNumber); 1 2 3

--------------------

let array1=[1,2,3],
array2=[4,5,6],
customArray=[1,2,3,...array2,7];

console.log(customArray);   [1, 2, 3, 4, 5, 6, 7]

---------------------
let array1=[1,2,3],
array2=array1;

array2.push(4);

console.log(array1);   [1, 2, 3, 4]
console.log(array2);   [1, 2, 3, 4]

--------------------
let array1=[1,2,3,100,-20,-10,500];

console.log(Math.min(array1));   NaN
console.log(Math.min(...array1));  -20



                                                                          Default Parameter


function showMyinfo(username,role,theme){
    username= username ===undefined?'Default user':username;
    role= role ===undefined?'Default role':role;
    theme=theme ===undefined?'Default theme':theme;
          return `Hello ${username}, You role is ${role}, Website theme is: ${theme}`;
}

console.log(showMyinfo("Moemen","admin","blue"));

-------------------------------------------------------------

function showMyinfo(username,role,theme){
    username= username ||'Default user';
    role= role || 'Default role';
    theme=theme ||'Default theme';
          return `Hello ${username}, You role is ${role}, Website theme is: ${theme}`;
}

console.log(showMyinfo("Moemen","admin","blue"));

------------------------------------------------------------

function showMyinfo(username='Default user',role='Default role',theme='theme'){
      return `Hello ${username}, You role is ${role}, Website theme is: ${theme}`;
}

console.log(showMyinfo("Moemen","admin","blue"));

          
                                                                       Rest Parameter


function showInfo(a,b,c,...myParams){

    console.log(`Param a`,a);
    console.log(`Param b`,b);
    console.log(`Param c`,c);
    console.log(`Param MyParams`,myParams);
    return `Console Ouptut done`;
}

console.log(showInfo("one","two","three","four","five","six","seven"));

output:
--------

Param a one
Param b two
Param c three
Param MyParams (4) ['four', 'five', 'six', 'seven']
Console Ouptut done

---------------------------------------------------------------

function addAll(...sum){
 let myNumber=0;
 for(let myParam of sum){
    myNumber=myNumber+myParam;
 }
 return myNumber;
}

console.log(addAll(1));  1
console.log(addAll(1,3,3));  7



                                                        New String Methods - startsWith, endsWith


let x="Elzero web school";

console.log(x.startsWith('Elzero',0));   true
console.log(x.endsWith('web',10));        true




*/

