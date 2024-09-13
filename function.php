<?php

$a = 5;
$b = 7;
$e = 9;

static $f = 6;

// global $f; this will also

function add($c,$d){

 // echo "$e"."<br/>";  //Warning: Undefined variable $e in C:\xampp\htdocs\int220\function.php on line 8

//  echo "$f";  // even static one is not work due to it is not defined as global

global $f;

// echo "$f </br>";  // this will give out put coz it is declared as global
$f++;

echo "Function Called <br/>";

echo $f."<br/>";

  echo $c+$d."<br/><br/> ";
}
add($a,$b);
add($a,$b);

?>