<?php

// session_start();
// $_SESSION['username'] = "Keshav Yadav";
// $_SESSION['role'] = "admin";

// session_unset(); 

// echo isset($_SESSION['username']) ? $_SESSION['username'] : "Session variable 'username' is not set";

// setcookie("testCookie", "modified user", time() + (86400 * 30), "/");

// if(isset($_COOKIE["testCookie"])) {
//     echo "Modified user: " . $_COOKIE["testCookie"];
// } else {
//     echo "Test cookie is not set.";
// }


session_start();
$_SESSION["usename"] = "keshav Yadav";
$_SESSION["role"] = "admin";

session_destroy();

echo isset($_SESSION["username"]) ? $_SESSION("username") : 
"Session variable 'username' is not set";

// echo $_SESSION("role");

?>
