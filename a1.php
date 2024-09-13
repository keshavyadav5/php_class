<?php 

// echo "Hello world";
// $a = 578;
// $b = 2.3;
// $c = "Nepal";
// $d = true;

// echo $a + $b."<br/>";
// echo $c."<br/>";
// echo $d;
// var_dump($d);

// $a = 65;
// echo $a;

// if($a >=18 && $a <=65){
//   echo "You can vote";
// }elseif($a > 65){
//   echo "You are too old to vote, please rest in peace";
// }else{
//   echo "Sorry bro, you cann't vote";
// }

// $a = 2;
// $b = 5;

// for($a;$a<=$b;$a++){
//   for($c=1;$c<=10;$c++){
//     echo $a." X ".$c." = ".$a * $c."<br/>";
//   }
//   echo "<br/>";
// }

$fruit = array(
  "apple" => 45,
  "banana" => "yellow",
  "cherry" => ["red","black","Rato"],
  "date" => "brown",
  "elderberry" => "purple"
);

  // echo "<pre>";
  // print_r($fruit);
  // echo $fruit['apple'];
  // var_dump($fruit);
  // echo "</pre>";

//   foreach ($fruit as $key => $value) {
//     if (is_array($value)) {
//         echo "$key: ";
//         foreach ($value as $item) {
//             echo "$item, ";
//         }
//         echo "<br>";
//     } else {
//         echo "$key: $value<br>";
//     }
// }

// echo strtoupper("keshav");
// echo "</br>";
// echo strtolower("KESHAV");
// echo "</br>";
// echo strlen("abxdakksthkst");
// echo "</br>";

//--------------------------- Leap Year --------------------------

  // $a = 2000;

  // if(($a % 400 == 0) || (($a % 100 != 0 ) && ($a % 4 == 0))){
  //   echo "leap year";
  // }else{
  //   echo "not a leap year";
  // }

// ------------------- Pallindrome number -----------------------

// $a = 2352;
// $b = $a;
// $rev = null;

// while( $a != 0){
//   $rem = $a % 10;
//   $a = (int)($a / 10);
//   $rev = $rev * 10 + $rem;
// }
// if($rev == $b){
//   echo "pallindrome number";
// }else{
//   echo "Not pallindrom numver";
// }

// ------------------- Pallindrome String -----------------------

  // $a = "aba";
  // $b = true;

  // for($i=0; $i<strlen($a); $i++){
  //   if($a[$i] != $a[strlen($a)-$i-1]){
  //     $b = false;
  //     break;
  //     }
  // }
  // if($b){
  //   echo "pallindrome string";
  //   }else{
  //     echo "Not pallindrome string";
  //     }

// -------------- Armstrong number ----------------------

// $a = 4;
// $b = strlen($a);
// $sum = 0;
// $c = $a;

// while($a > 0){
//   $rem =(int) $a % 10;
//   $a = (int)($a / 10);
//   $sum = $sum + pow($rem, $b);
// }
// if($sum == $c){
//   echo "armstrong number";
//   }else{
//     echo "Not armstrong number";
//     }



?>