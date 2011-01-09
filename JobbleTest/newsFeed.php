<?php

include("dbConfig.php");

$sqlUser = "SELECT * FROM User WHERE `UserName` ='".$_SESSION["valid_user"]."'";
$resultUser = mysql_query($sqlUser);
$rowUser = mysql_fetch_array($resultUser);
$userID = $rowUser['UserID'];
  
  
// sql query to find jobs the user posted
$sqlPosted = "SELECT JobPosted FROM Posted WHERE `UserID` = '".$userID."'";
// run  the query against the mysql query function
$resultPosted = mysql_query($sqlPosted);
echo "<p>Here are the jobs you posted:</b>";
echo "<ul>";
// create  while loop and loop through result set of jobs user posted
while($rowPosted = mysql_fetch_array($resultPosted)){
  $id  = $rowPosted['JobPosted'];
  $sqlTitle = "SELECT * FROM Jobs WHERE `ID` = '".$id."'";
  $resultTitle = mysql_query($sqlTitle);
  $rowTitle = mysql_fetch_array($resultTitle);
  echo "<li>" . $rowTitle['Title']."</a></li>\n";
}
echo "</ul>";




// sql query to find jobs the user applied for
$sqlApplied = "SELECT JobApplied FROM Applied WHERE `UserID` = '".$userID."'";
// run  the query against the mysql query function
$resultApplied = mysql_query($sqlApplied);
echo "<p>Here are the jobs you applied for:</b>";
// create  while loop and loop through result set of jobs user applied for
while($rowApplied = mysql_fetch_array($resultApplied)){
  $id  = $rowApplied['JobApplied'];
  $sqlTitle = "SELECT * FROM Jobs WHERE `ID` = '".$id."'";
  $resultTitle = mysql_query($sqlTitle);
  $rowTitle = mysql_fetch_array($resultTitle);
  echo "<li>" . $rowTitle['Title']."</a></li>\n";
}
echo "</ul>";


// sql query to find jobs the user completed
$sqlApplied = "SELECT JobCompleted FROM Completed WHERE `UserID` = '".$userID."'";
// run  the query against the mysql query function
$resultCompleted = mysql_query($sqlCompleted);
echo "<p>Here are the jobs you completed:</b>";
// create  while loop and loop through result set of jobs user completed
while($rowCompleted = mysql_fetch_array($resultCompleted)){
  $id  = $rowCompleted['JobCompleted'];
  $sqlTitle = "SELECT * FROM Jobs WHERE `ID` = '".$id."'";
  $resultTitle = mysql_query($sqlTitle);
  $rowTitle = mysql_fetch_array($resultTitle);
  echo "<li>" . $rowTitle['Title']."</a></li>\n";
}
echo "</ul>";



// sql query to find jobs the user received
$sqlReceived = "SELECT JobReceived FROM Received WHERE `UserID` = '".$_SESSION["valid_user_id"]."'";
// run  the query against the mysql query function
$resultReceived = mysql_query($sqlReceived);
echo "<p>Here are the jobs you received:</b>";
// create  while loop and loop through result set of jobs user received
while($rowReceived = mysql_fetch_array($resultReceived)){
  $id  = $rowReceived['JobReceived'];
  $sqlTitle = "SELECT * FROM Jobs WHERE `ID` = '".$id."'";
  $resultTitle = mysql_query($sqlTitle);
  $rowTitle = mysql_fetch_array($resultTitle);
  echo "<li>" . $rowTitle['Title']."</a></li>\n";
}
echo "</ul>";


?>
