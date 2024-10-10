<?php

if($_SERVER["REQUEST_METHOD"]== "POST"){
  $name = htmlspecialchars($_POST['name']);
  $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
  
  
  if(!empty($name)){
    echo "<h2>Your name is :  ".$name."!</h2>";
    echo "<h2>Your email is : ".$email."!</h2>";
  }else{
    echo "<h2>Please enter your name</h2>";
  }
}


?>