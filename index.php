<?php

//////////////////////////////////
/////// FUNCTION EXAMPLE 1 ///////
//////////////////////////////////

function hello(){
  echo "Hello, World!";
}

// hello();


//////////////////////////////////
/////// FUNCTION EXAMPLE 2 ///////
//////////////////////////////////

$current_user = 'Hampton';

function is_mike(){
  global $current_user;
  if($current_user == 'Mike'){
    echo "It is Mike!";  
  } else {
    echo "Nope, it is not Mike.";  
  }
}

// is_mike();


//////////////////////////////////
/////// FUNCTION EXAMPLE 3 ///////
//////////////////////////////////

function hello($arr){
  if(is_array($arr)){
    foreach($arr as $name){
      echo "Hello, $name, how's it going?!</br>";
    }
  } else {
    echo "Hello, friends!";
  }
}

// $names = array['Roy', 'Laura', 'Georgia'];
// hello($names);


//////////////////////////////////
/////// FUNCTION EXAMPLE 4 ///////
//////////////////////////////////

function greet($name = 'friend',
               $time_of_day = 'morning'){
      echo "Hi, $name, good $time_of_day";            
}

// greet('Roy', 'afternoon');
// greet();


//////////////////////////////////
/////// FUNCTION EXAMPLE 5.1 /////
//////////////////////////////////

function greet($name = 'friend',
               $time_of_day = Null){
    if($time_of_day){
      echo "Hi, $name, good $time_of_day.";
    } else {
      echo "Hello, $name.";
    }
}

// greet('Roy', 'afternoon');
// greet('Roy');


//////////////////////////////////
/////// FUNCTION EXAMPLE 5.2 /////
//////////////////////////////////

function get_info($name, $title = Null){
  if($title){
    echo "$name has arrived, they are with us as a $title.";
  } else {
    echo "$name has arrived. Welcome!"
  }
}

// get_info('Mike', 'frog');
// get_info('Mike');


//////////////////////////////////
/////// FUNCTION EXAMPLE 7 ///////
//////////////////////////////////

function hello(){
  return 'Hello, World!';
}

$greeting = hello();

// echo $greeting;

//////////////////////////////////
/////// FUNCTION EXAMPLE 8 ///////
//////////////////////////////////

function hello($name){
  if($name == 'Mike'){
    return 'Hello, Mike!';
  } else {
    return 'Hello, stranger!';
  }
}

// $greeting = hello('Roy');
$greeting = hello('Mike');

// echo $greeting;


//////////////////////////////////
/////// FUNCTION EXAMPLE 9 ///////
//////////////////////////////////

function add_up($a, $b){
  return $a + $b;
}

$value = add_up(2, 4);

// echo $value;


//////////////////////////////////
/////// FUNCTION EXAMPLE 10 //////
//////////////////////////////////

function add_up($a, $b){
  $arr = [
    $a,
    $b,
    $a + $b
  ];
  return $arr;
}

$value = add_up(2, 4);

// print_r($value);

//////////////////////////////////
/////// FUNCTION EXAMPLE 11 //////
//////////////////////////////////

function answer(){
  return 42;
}

function add_up($a, $b){
  return $a + $b;
}

//$func = 'answer';
// echo $func();

$func = 'add_up';
$num = $func(5, 10);
// echo $num;


//////////////////////////////////
/////// FUNCTION EXAMPLE 12 //////
//////////////////////////////////

// CLOSURES
$name = 'friend';
$greet = function() use($name){
  echo "Hello, $name!";
};

// echo $greet();


//////////////////////////////////
/////// FUNCTION EXAMPLE 13 //////
//////////////////////////////////

// STRING FUNCTIONS
$phrase = "We only hit what we aim for";

// 1: STRLEN();
$len = strlen($phrase);
// echo $len;

// 2: SUBSTR();
// echo substr($phrase, 5);
// echo substr($phrase, 0, 5);

// 3: SUBPOS();
// echo strpos($phrase, 'hit');
// var_dump(strpos($phrase, 'bob')); // False

// 4: COMBO OF STRPOS(); & SUBSTR();
$start = strpos($phrase, 'hit');
// echo substr($phrase, $start);


//////////////////////////////////
/////// FUNCTION EXAMPLE 14 //////
//////////////////////////////////

// ARRAY FUNCTIONS

// ASSOCIATIVE ARRAY
$names = ["Roy" => "Web Developer", 
          "Laura" => "Counselor", 
          "Georgia" => "Baby"
         ];

// 1: ARRAY_KEYS();
// var_dump = (array_keys($names));
// foreach(array_keys($names) as $name){
  // echo "Hello, $name!</br>";
// }

// 2: ARRAY_WALK();
function print_info($value, $key){
  echo "$key is a $value.</br>";
}
array_walk($names, 'print_info');

?>