<?php
// Database
require "./datadb.php";

// Form data
$username = $_POST["username"];
$password = $_POST["password"];

// Verify
if ($username == $users["userdb"] && $password == $users["passdb"]) {
    // Cookies
    setcookie(
        name:"USERNAME", 
        value:$username, 
        expires_or_options:0, 
        path:"/");
    setcookie(
        name:"NAMEUSER",
        value:$users["namedb"],
        expires_or_options:0,
        path:"/"
    );
    // Redirect dashboard.php
    header("Location: ./dashboard.php");
} else {
    // Redirect login.php
    header("Location: ./login.php");
}
?>