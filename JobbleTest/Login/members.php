<?php
session_start();

if (!$_SESSION["valid_user"])
        {
        // User not logged in, redirect to login page
        Header("Location: login.php");
        }
        
include("../dbConfig.php");
     
$sqlUser = "SELECT * FROM User WHERE `UserName` ='".$_SESSION["valid_user"]."'";
$resultUser = mysql_query($sqlUser);
$rowUser = mysql_fetch_array($resultUser);
$userName = $rowUser['Name'];     
        
// Display Member and Logout information
echo "Name: ".$userName." Username: " . $_SESSION["valid_user"] . "  Logged in: " . date("m/d/Y", $_SESSION["valid_time"]) . "  <a href=\"/Test/JobbleTest/Login/logout.php\">Click here to logout!</a>";


?>