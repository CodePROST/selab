<?php session_start(); 

// Username and password
$ID = "admin";
$pass = "123456";

if (isset($_POST["user"]) && isset($_POST["pass"])) { 
    if ($_POST["user"] === $ID && $_POST["pass"] === $pass) { 
        $_SESSION["inloggedin"] = true; 
    header("Location: index.html"); 
    exit; 
    } 
        // Wrong login - message
        else {$wrong = "Bad ID and password, the system could not log you in";} 
}
?>
